<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NOWPaymentsService
{
    private $apiKey;
    private $baseUrl;
    private $isSandbox;

    // public function __construct()
    // {
    //     $this->isSandbox = config('app.env') !== 'production' || env('NOWPAYMENTS_SANDBOX', false);
    //     $this->apiKey = $this->isSandbox 
    //         ? env('NOWPAYMENTS_SANDBOX_API_KEY') 
    //         : env('NOWPAYMENTS_API_KEY');
    //     $this->baseUrl = $this->isSandbox 
    //         ? 'https://api-sandbox.nowpayments.io/v1' 
    //         : 'https://api.nowpayments.io/v1';

    //     // Log environment for debugging
    //     Log::debug('NOWPaymentsService Initialized', [
    //         'environment' => $this->isSandbox ? 'sandbox' : 'production',
    //         'base_url' => $this->baseUrl,
    //     ]);
    // }

    public function __construct()
    {
        $this->apiKey = env('NOWPAYMENTS_API_KEY');
        $this->baseUrl = 'https://api.nowpayments.io/v1';

        // Validate API key presence
        if (empty($this->apiKey)) {
            Log::error('NOWPayments API key is missing', [
                'environment' => 'production',
            ]);
            throw new \Exception('NOWPayments API key is not configured');
        }

        Log::debug('NOWPaymentsService Initialized', [
            'environment' => 'production',
            'base_url' => $this->baseUrl,
        ]);
    }


    /**
     * Create an invoice for redirect payment
     */
    public function createInvoice($data)
    {
        // Validate required fields
        if (!isset($data['amount']) || !is_numeric($data['amount']) || $data['amount'] <= 0) {
            Log::error('Invalid invoice amount', ['data' => $data]);
            return null;
        }
        if (!isset($data['currency']) || !in_array($data['currency'], ['USD', 'EUR', 'GBP', 'usdt'])) {
            Log::error('Invalid price currency', ['data' => $data]);
            return null;
        }
        if (!isset($data['order_id'])) {
            Log::error('Missing order_id', ['data' => $data]);
            return null;
        }

        $payload = [
            'price_amount' => (float) $data['amount'],
            'price_currency' => $data['currency'],
            'pay_currency' => $data['pay_currency'] ?? null,
            'order_id' => $data['order_id'],
            'order_description' => $data['description'] ?? 'Payment for order #' . $data['order_id'],
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
            'partially_paid_url' => route('payment.partial', ['order_id' => $data['order_id']]),
            'is_fixed_rate' => $data['is_fixed_rate'] ?? false,
            'is_fee_paid_by_user' => $data['is_fee_paid_by_user'] ?? false,
        ];

        if (isset($data['ipn_callback_url'])) {
            $payload['ipn_callback_url'] = $data['ipn_callback_url'];
        }

        try {
            $response = Http::withHeaders([
                'x-api-key' => $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/invoice', $payload);

            if ($response->successful()) {
                Log::info('NOWPayments Invoice Created', [
                    'order_id' => $data['order_id'],
                    'invoice_id' => $response->json()['id'] ?? 'unknown',
                ]);
                return $response->json();
            }

            Log::error('NOWPayments Invoice Creation Failed', [
                'response' => $response->json(),
                'status' => $response->status(),
                'payload' => $payload,
                'url' => $this->baseUrl . '/invoice',
                'environment' => $this->isSandbox ? 'sandbox' : 'production',
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('NOWPayments API Error', [
                'error' => $e->getMessage(),
                'payload' => $payload,
                'url' => $this->baseUrl . '/invoice',
                'environment' => $this->isSandbox ? 'sandbox' : 'production',
            ]);
            return null;
        }
    }

    /**
     * Get invoice status
     */
    public function getInvoiceStatus($invoiceId)
    {
        try {
            $response = Http::withHeaders([
                'x-api-key' => $this->apiKey,
            ])->get($this->baseUrl . '/invoice/' . $invoiceId);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('NOWPayments Get Invoice Status Failed', [
                'invoice_id' => $invoiceId,
                'response' => $response->json(),
                'status' => $response->status(),
                'url' => $this->baseUrl . '/invoice/' . $invoiceId,
            ]);
            return null;
        } catch (\Exception $e) {
            Log::error('NOWPayments Get Invoice Error', [
                'invoice_id' => $invoiceId,
                'error' => $e->getMessage(),
            ]);
            return null;
        }
    }

    /**
     * Get available currencies
     */
    public function getAvailableCurrencies()
    {
        try {
            $response = Http::withHeaders([
                'x-api-key' => $this->apiKey,
            ])->get($this->baseUrl . '/currencies');

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('NOWPayments Get Currencies Failed', [
                'response' => $response->json(),
                'status' => $response->status(),
                'url' => $this->baseUrl . '/currencies',
            ]);
            return [];
        } catch (\Exception $e) {
            Log::error('NOWPayments Get Currencies Error', [
                'error' => $e->getMessage(),
            ]);
            return [];
        }
    }
}