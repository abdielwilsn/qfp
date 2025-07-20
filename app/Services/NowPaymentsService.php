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

    public function getPaymentStatus($paymentId)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey
        ])->get("{$this->baseUrl}/payment/$paymentId");

        return $response->json();
    }
}
