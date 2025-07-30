<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            [
                'id' => 1,
                'site_name' => 'Starbiit',
                'description' => 'We are starbiit',
                'currency' => '$',
                's_currency' => 'USD',
                'capt_secret' => '6LeFiYEaAAAAAPWZh1eQgdd5W99qz8KXZEEmCFaK',
                'capt_sitekey' => '6LeFiYEaAAAAAHmnxl4z7s9IH1-TmmCu1mD9Mn_8',
                'payment_mode' => '123567',
                'location' => 'Local',
                's_s_k' => 'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEAqXLAaH3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP',
                's_p_k' => 'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly65fb1LiPUwAUajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd',
                'pp_cs' => 'jijdjkdkdk',
                'pp_ci' => 'iidjdjdj',
                'keywords' => 'online trade, forex, cfd,',
                'site_title' => 'Welcome to Starbit',
                'site_address' => 'https://hyip.metafxcrypto.com/',
                'logo' => 'giuNrOlogo 2.png1644161897',
                'favicon' => 'giuNrOfavicon.png1644161897',
                'trade_mode' => 'on',
                'google_translate' => 'on',
                'weekend_trade' => 'off',
                'contact_email' => 'starbiit247@gmail.com',
                'timezone' => 'UTC',
                'mail_server' => 'sendmail',
                'emailfrom' => 'hello@starbiit.com',
                'emailfromname' => 'JohnPraise',
                'smtp_host' => 'smtp.mailgun.org',
                'smtp_port' => '2525',
                'smtp_encrypt' => 'tls',
                'smtp_user' => 'starbiit@sandbox2b95d32199e142618e0b0da9e18db03d.mailgun.org',
                'smtp_password' => '',
                'google_secret' => 'OTUW0i4B7ZI-GaoNPwe1krPF',
                'google_id' => '807575122053-0056a75lgfai5f205sc0fvku6tqgd6ac.apps.googleusercontent.com',
                'google_redirect' => 'http://yoursite.com/auth/google/callback',
                'referral_commission' => '40',
                'referral_commission1' => '30',
                'referral_commission2' => '20',
                'referral_commission3' => '10',
                'referral_commission4' => '5',
                'referral_commission5' => '1',
                'signup_bonus' => '0',
                'tawk_to' => 'tawk to codess',
                'enable_2fa' => 'no',
                'enable_kyc' => 'yes',
                'enable_with' => 'true',
                'enable_verification' => 'false',
                'enable_social_login' => 'no',
                'withdrawal_option' => 'manual',
                'deposit_option' => 'manual',
                'dashboard_option' => 'light',
                'enable_annoc' => 'on',
                'subscription_service' => 'off',
                'captcha' => 'false',
                'commission_type' => null,
                'commission_fee' => null,
                'monthlyfee' => '30',
                'quarterlyfee' => '40',
                'yearlyfee' => '80',
                'newupdate' => 'Welcome to Starbiit',
                'created_at' => null,
                'updated_at' => '2022-02-12 05:45:36',
            ],
        ]);
    }
}