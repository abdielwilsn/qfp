<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function find($id)
    {
        return User::where('id', $id)->first();
    }

    public function updateBalance($id, float $amount)
    {
        $user = $this->find($id);
        if ($user) {
            User::where('id', $id)->update([
                'account_bal' => $user->account_bal + $amount,
            ]);
        }
    }

    public function updateRefBonus($id, float $amount)
    {
        dd($id);
        $user = $this->find($id);
        if ($user) {
            User::where('id', $id)->update([
                'account_bal' => $user->account_bal + $amount,
                'ref_bonus' => $user->ref_bonus + $amount,
            ]);
        }
    }

    public function markRefByPaid($id)
    {
        User::where('id', $id)->update(['ref_by_paid' => true]);
    }
}
