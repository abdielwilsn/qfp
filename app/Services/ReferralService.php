<?php

namespace App\Services;

use App\Models\Agent;
use App\Models\Settings;
use App\Models\Tp_Transaction;
use App\Models\UserReferralSetting;
use App\Repositories\UserRepositoryInterface;

class ReferralService
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handleDirectReferralBonus($user, $depositAmount)
    {
        if (empty($user->ref_by) || $user->ref_by_paid) {
            return;
        }

        $referrerSettings = UserReferralSetting::where('user_id', $user->ref_by)->first();
        $globalSettings = Settings::where('id', 1)->first();

        $commissionRate = $referrerSettings ? $referrerSettings->referral_commission : $globalSettings->referral_commission;
        $earnings = $commissionRate * $depositAmount / 100;

        Agent::where('agent', $user->ref_by)->increment('total_activated', 1);
        Agent::where('agent', $user->ref_by)->increment('earnings', $earnings);



        $this->userRepository->updateRefBonus($user->ref_by, $earnings);


        Tp_Transaction::create([
            'user' => $user->ref_by,
            'plan' => 'Credit',
            'amount' => $earnings,
            'type' => 'Ref_bonus',
        ]);


        $this->userRepository->markRefByPaid($user->id);
    }

    public function handleAncestorBonuses($userId, $depositAmount)
    {
        $users = \App\Models\User::all();
        $this->calculateAncestorBonuses($users, $depositAmount, $userId);
    }

    private function calculateAncestorBonuses($users, $depositAmount, $parentId, $level = 0)
    {
        if ($level >= 5) {
            return;
        }

        $parent = $this->userRepository->find($parentId);
        if (!$parent || empty($parent->ref_by)) {
            return;
        }

        foreach ($users as $user) {
            if ($user->id == $parent->ref_by) {
                $ancestorSettings = UserReferralSetting::where('user_id', $user->id)->first();
                $globalSettings = Settings::where('id', 1)->first();

                $commissionRate = $this->getCommissionRate($ancestorSettings, $globalSettings, $level + 1);
                $earnings = $commissionRate * $depositAmount / 100;

                if ($earnings > 0) {
                    $this->userRepository->updateRefBonus($user->id, $earnings);
                    Tp_Transaction::create([
                        'user' => $user->id,
                        'plan' => 'Credit',
                        'amount' => $earnings,
                        'type' => 'Ref_bonus',
                    ]);
                }

                $this->calculateAncestorBonuses($users, $depositAmount, $user->id, $level + 1);
            }
        }
    }

    private function getCommissionRate($ancestorSettings, $globalSettings, $level)
    {
        $field = "referral_commission$level";
        return $ancestorSettings ? $ancestorSettings->$field : $globalSettings->$field;
    }
}
