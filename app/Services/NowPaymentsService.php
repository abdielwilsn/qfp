<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NowPaymentsService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.nowpayments.base_url');
        $this->apiKey = config('services.nowpayments.api_key');
    }

    public function createPayment(array $data)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey
        ])->post("{$this->baseUrl}/invoice", $data);

        return $response->json();
    }

    public function getMinimumAmount($from = 'usd', $to = 'usdttrc20')
{
    $response = Http::withHeaders([
        'x-api-key' => $this->apiKey
    ])->get("{$this->baseUrl}/min-amount", [
        'currency_from' => $from,
        'currency_to' => $to,
        'fiat_equivalent' => 'usd',
        'is_fixed_rate' => 'false',
        'is_fee_paid_by_user' => 'false',
    ]);

    return $response->json();
}


    public function getPaymentStatus($paymentId)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey
        ])->get("{$this->baseUrl}/payment/$paymentId");

        return $response->json();
    }
}
