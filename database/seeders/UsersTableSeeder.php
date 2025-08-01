<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 55,
                'name' => 'Remedy Tech',
                'email' => 'nweleugochukwu@gmail.com',
                'username' => 'Remedy',
                'email_verified_at' => '2021-11-22 09:16:17',
                'password' => '$2a$12$897xkyrPTz41RbEJaxohqea8WDVD2ZXN0x8.YZik5tTcnIxkHoToK',
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'dob' => null,
                'cstatus' => null,
                'userupdate' => null,
                'assign_to' => null,
                'address' => null,
                'country' => 'Australia',
                'phone' => '+614566444',
                'dashboard_style' => 'light',
                'bank_name' => null,
                'account_name' => null,
                'account_number' => null,
                'swift_code' => null,
                'acnt_type_active' => null,
                'btc_address' => null,
                'eth_address' => null,
                'ltc_address' => null,
                'plan' => '6',
                'user_plan' => '9',
                'account_bal' => 9665,
                'roi' => null,
                'bonus' => 5,
                'ref_bonus' => null,
                'signup_bonus' => 'received',
                'auto_trade' => null,
                'bonus_released' => 0,
                'ref_by' => null,
                'ref_link' => 'https://hyip.metafxcrypto.com/ref/remedy',
                'id_card' => null,
                'passport' => null,
                'account_verify' => null,
                'entered_at' => '2022-02-11 22:12:58',
                'activated_at' => null,
                'last_growth' => null,
                'status' => 'active',
                'trade_mode' => 'on',
                'act_session' => null,
                'remember_token' => 'qB3MNPbMPGWHitg0cUngDIXEVCnRSIxVNzx2INvPqzExsZVYsrK5HxelcEJc',
                'current_team_id' => null,
                'profile_photo_path' => null,
                'withdrawotp' => null,
                'sendotpemail' => 'No',
                'sendroiemail' => 'Yes',
                'sendpromoemail' => 'Yes',
                'sendinvplanemail' => 'Yes',
                'created_at' => '2021-11-22 09:16:05',
                'updated_at' => '2022-02-12 05:33:31',
            ],
            [
                'id' => 56,
                'name' => 'Eva Kovac',
                'email' => 'remedyhyip@gmail.com',
                'username' => 'ugoandy',
                'email_verified_at' => '2022-02-06 20:47:23',
                'password' => '$2y$10$bDVY0VdE2cJWrhRROLLcte6t5B9eXRqgvIsVFtuT/btdTQGTIww8.',
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'dob' => null,
                'cstatus' => null,
                'userupdate' => null,
                'assign_to' => null,
                'address' => null,
                'country' => 'Bangladesh',
                'phone' => '8109514371',
                'dashboard_style' => 'dark',
                'bank_name' => null,
                'account_name' => null,
                'account_number' => null,
                'swift_code' => null,
                'acnt_type_active' => null,
                'btc_address' => null,
                'eth_address' => null,
                'ltc_address' => 'er',
                'plan' => '6',
                'user_plan' => '11',
                'account_bal' => 37990,
                'roi' => 10000,
                'bonus' => 0,
                'ref_bonus' => 0,
                'signup_bonus' => 'received',
                'auto_trade' => null,
                'bonus_released' => 0,
                'ref_by' => null,
                'ref_link' => 'http://127.0.0.1:8000/ref/ugoandy',
                'id_card' => 'eCHNvojm_denis.jpg1644621048',
                'passport' => 'eCHNvojm_denis.jpg1644621048',
                'account_verify' => 'Verified',
                'entered_at' => '2022-02-11 22:31:16',
                'activated_at' => null,
                'last_growth' => null,
                'status' => 'active',
                'trade_mode' => 'on',
                'act_session' => null,
                'remember_token' => 'KqPmBYb0eu05j8kJzW52askg6U1DRrbKJ9PaawOuaPLYjshvQ9gQkK25xQc7',
                'current_team_id' => null,
                'profile_photo_path' => null,
                'withdrawotp' => null,
                'sendotpemail' => 'No',
                'sendroiemail' => 'Yes',
                'sendpromoemail' => 'Yes',
                'sendinvplanemail' => 'Yes',
                'created_at' => '2022-02-06 20:47:23',
                'updated_at' => '2022-02-12 05:41:27',
            ],
            [
                'id' => 57,
                'name' => 'Nwele Ugochukwu Emmanuel',
                'email' => 'evakovac929@gmail.com',
                'username' => 'eva123',
                'email_verified_at' => '2022-02-19 01:43:24',
                'password' => '$2y$10$7Dzuuon9i9E16fgGknNQyOzj2Ugu2GP4YEPWUb4WRuCAJjB3DDBYu',
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'dob' => null,
                'cstatus' => null,
                'userupdate' => null,
                'assign_to' => null,
                'address' => null,
                'country' => 'Andorra',
                'phone' => '+175435672082',
                'dashboard_style' => 'light',
                'bank_name' => null,
                'account_name' => null,
                'account_number' => null,
                'swift_code' => null,
                'acnt_type_active' => null,
                'btc_address' => null,
                'eth_address' => null,
                'ltc_address' => null,
                'plan' => null,
                'user_plan' => null,
                'account_bal' => 0,
                'roi' => null,
                'bonus' => 0,
                'ref_bonus' => 0,
                'signup_bonus' => 'received',
                'auto_trade' => null,
                'bonus_released' => 0,
                'ref_by' => null,
                'ref_link' => 'https://hyip.metafxcrypto.com//ref/eva123',
                'id_card' => null,
                'passport' => null,
                'account_verify' => null,
                'entered_at' => null,
                'activated_at' => null,
                'last_growth' => null,
                'status' => 'active',
                'trade_mode' => 'on',
                'act_session' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'withdrawotp' => null,
                'sendotpemail' => 'Yes',
                'sendroiemail' => 'Yes',
                'sendpromoemail' => 'Yes',
                'sendinvplanemail' => 'Yes',
                'created_at' => '2022-02-19 01:43:24',
                'updated_at' => '2022-02-19 01:43:25',
            ],
        ]);
    }
}