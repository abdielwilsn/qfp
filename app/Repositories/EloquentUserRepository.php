<?php

namespace App\Repositories;

use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function find(int $id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(int $id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete(int $id)
    {
        return User::destroy($id);
    }

    public function updateBalance(int $id, float $amount)
    {
        $user = User::findOrFail($id);
        $user->account_bal += $amount;
        $user->save();

        return $user;
    }

    public function updateRefBonus(int $id, float $amount)
    {

        $user = User::findOrFail($id);

        if ($user && $user->account_verify === 'Verified') {

            $user->account_bal += $amount;

        } else {

            $user->ref_bonus += $amount;

        }

        // $user->ref_bonus += $amount;

        // so logic to check kyc status before updating account balance.

        // if ($user->kyc_status === 'approved') {
        //     $user->account_bal += $amount;
        // }
        // $user->account_bal += $amount;
        $user->save();

        return $user;
    }

    public function markRefByPaid(int $id)
    {
        $user = User::findOrFail($id);
        $user->ref_by_paid = true; // must exist in `users` table
        $user->save();

        return $user;
    }
}
