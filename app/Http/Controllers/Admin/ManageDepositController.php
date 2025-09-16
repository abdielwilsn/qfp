<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\Asset;
use App\Models\Mt4Details;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use App\Models\Notification;
use App\Models\UserReferralSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class ManageDepositController extends Controller
{
    // Delete deposit
    public function deldeposit($id)
    {
        Deposit::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deposit history has been deleted!');
    }

    public function pdeposit($id)
    {
        return DB::transaction(function () use ($id) {
            // Lock the deposit record
            $deposit = Deposit::where('id', $id)->lockForUpdate()->first();
            if (!$deposit) {
                return redirect()->back()->with('error', 'Deposit not found!');
            }

            // Check if deposit is already processed
            if ($deposit->status === 'Processed') {
                return redirect()->back()->with('error', 'Deposit already processed!');
            }

            $user = User::where('id', $deposit->user)->first();
            if (!$user || $deposit->user != $user->id) {
                return redirect()->back()->with('error', 'Invalid user for this deposit!');
            }

            // Check if this is the user's first deposit
            $isFirstDeposit = !Deposit::where('user', $user->id)
                ->where('status', 'Processed')
                ->where('id', '!=', $id)
                ->exists();

            // Add funds to user's account
            User::where('id', $user->id)->update([
                'account_bal' => $user->account_bal + $deposit->amount,
            ]);

            // Handle referral bonus for direct referrer
            if ($isFirstDeposit && !empty($user->ref_by) && !$user->ref_by_paid) {
                $referrerSettings = UserReferralSetting::where('user_id', $user->ref_by)->first();
                $globalSettings = Settings::where('id', 1)->first();

                $commissionRate = $referrerSettings ? $referrerSettings->referral_commission : $globalSettings->referral_commission;
                $earnings = $commissionRate * $deposit->amount / 100;

                Agent::where('agent', $user->ref_by)->increment('total_activated', 1);
                Agent::where('agent', $user->ref_by)->increment('earnings', $earnings);

                $agent = User::where('id', $user->ref_by)->first();
                User::where('id', $user->ref_by)->update([
                    'account_bal' => $agent->account_bal + $earnings,
                    'ref_bonus' => $agent->ref_bonus + $earnings,
                ]);

                Tp_Transaction::create([
                    'user' => $user->ref_by,
                    'plan' => "Credit",
                    'amount' => $earnings,
                    'type' => "Ref_bonus",
                ]);

                User::where('id', $user->id)->update([
                    'ref_by_paid' => true,
                ]);
            }

            // Credit commission to ancestors
            if ($isFirstDeposit) {
                $deposit_amount = $deposit->amount;
                $array = User::all();
                $parent = $user->id;
                $this->getAncestors($array, $deposit_amount, $parent);
            }

            // Update deposit status
            Deposit::where('id', $id)->update([
                'status' => 'Processed',
            ]);

            return redirect()->back()->with('success', 'Action Successful!');
        });
    }

    // // Process deposits
    // public function pdeposit($id)
    // {
    //     // Find the deposit and user
    //     $deposit = Deposit::where('id', $id)->first();
    //     if (!$deposit) {
    //         return redirect()->back()->with('error', 'Deposit not found!');
    //     }

    //     $user = User::where('id', $deposit->user)->first();
    //     if (!$user || $deposit->user != $user->id) {
    //         return redirect()->back()->with('error', 'Invalid user for this deposit!');
    //     }

    //     // Check if this is the user's first deposit
    //     $isFirstDeposit = !Deposit::where('user', $user->id)
    //         ->where('status', 'Processed')
    //         ->where('id', '!=', $id) // Exclude the current deposit
    //         ->exists();

    //     // Add funds to user's account
    //     User::where('id', $user->id)->update([
    //         'account_bal' => $user->account_bal + $deposit->amount,
    //     ]);

    //     // Handle referral bonus for direct referrer (if applicable)
    //     if ($isFirstDeposit && !empty($user->ref_by) && !$user->ref_by_paid) {
    //         // Get the referrer's custom settings or fall back to global settings
    //         $referrerSettings = UserReferralSetting::where('user_id', $user->ref_by)->first();
    //         $globalSettings = Settings::where('id', 1)->first();

    //         $commissionRate = $referrerSettings ? $referrerSettings->referral_commission : $globalSettings->referral_commission;
    //         $earnings = $commissionRate * $deposit->amount / 100;

    //         // Update agent's total activated clients and earnings
    //         Agent::where('agent', $user->ref_by)->increment('total_activated', 1);
    //         Agent::where('agent', $user->ref_by)->increment('earnings', $earnings);

    //         // Add earnings to referrer's balance
    //         $agent = User::where('id', $user->ref_by)->first();
    //         User::where('id', $user->ref_by)->update([
    //             'account_bal' => $agent->account_bal + $earnings,
    //             'ref_bonus' => $agent->ref_bonus + $earnings,
    //         ]);

    //         // Create transaction history
    //         Tp_Transaction::create([
    //             'user' => $user->ref_by,
    //             'plan' => "Credit",
    //             'amount' => $earnings,
    //             'type' => "Ref_bonus",
    //         ]);

    //         // Mark ref_by_paid as true
    //         User::where('id', $user->id)->update([
    //             'ref_by_paid' => true,
    //         ]);
    //     }

    //     // Credit commission to ancestors (only on first deposit)
    //     if ($isFirstDeposit) {
    //         $deposit_amount = $deposit->amount;
    //         $array = User::all();
    //         $parent = $user->id;
    //         $this->getAncestors($array, $deposit_amount, $parent);
    //     }

    //     // Update deposit status
    //     Deposit::where('id', $id)->update([
    //         'status' => 'Processed',
    //     ]);

    //     return redirect()->back()->with('success', 'Action Successful!');
    // }

    // View deposit image
    public function viewdepositimage($id)
    {
        return view('admin.Deposits.depositimg', [
            'deposit' => Deposit::where('id', $id)->first(),
            'title' => 'View Deposit Screenshot',
            'settings' => Settings::where('id', 1)->first(),
        ]);
    }

    // Get uplines
    function getAncestors($array, $deposit_amount, $parent = 0, $level = 0)
    {
        $referedMembers = '';
        $parent = User::where('id', $parent)->first();
        if (!$parent) {
            return $referedMembers;
        }

        foreach ($array as $entry) {
            if ($entry->id == $parent->ref_by) {
                // Get the ancestor's custom settings or fall back to global settings
                $ancestorSettings = UserReferralSetting::where('user_id', $entry->id)->first();
                $globalSettings = Settings::where('id', 1)->first();

                $earnings = 0;
                if ($level == 1) {
                    $commissionRate = $ancestorSettings ? $ancestorSettings->referral_commission1 : $globalSettings->referral_commission1;
                    $earnings = $commissionRate * $deposit_amount / 100;
                } elseif ($level == 2) {
                    $commissionRate = $ancestorSettings ? $ancestorSettings->referral_commission2 : $globalSettings->referral_commission2;
                    $earnings = $commissionRate * $deposit_amount / 100;
                } elseif ($level == 3) {
                    $commissionRate = $ancestorSettings ? $ancestorSettings->referral_commission3 : $globalSettings->referral_commission3;
                    $earnings = $commissionRate * $deposit_amount / 100;
                } elseif ($level == 4) {
                    $commissionRate = $ancestorSettings ? $ancestorSettings->referral_commission4 : $globalSettings->referral_commission4;
                    $earnings = $commissionRate * $deposit_amount / 100;
                } elseif ($level == 5) {
                    $commissionRate = $ancestorSettings ? $ancestorSettings->referral_commission5 : $globalSettings->referral_commission5;
                    $earnings = $commissionRate * $deposit_amount / 100;
                }

                if ($earnings > 0) {
                    // Add earnings to ancestor balance
                    User::where('id', $entry->id)->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);

                    // Create transaction history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount' => $earnings,
                        'type' => "Ref_bonus",
                    ]);
                }

                if ($level == 5) { // Stop at level 5
                    break;
                }

                $referedMembers .= $this->getAncestors($array, $deposit_amount, $entry->id, $level + 1);
            }
        }
        return $referedMembers;
    }

    // For front-end content management
    function RandomStringGenerator($n)
    {
        $generated_string = "";
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $len = strlen($domain);
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, $len - 1);
            $generated_string = $generated_string . $domain[$index];
        }
        return $generated_string;
    }
}
