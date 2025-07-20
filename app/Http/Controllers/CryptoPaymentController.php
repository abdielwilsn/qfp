<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NowPaymentsService;

class CryptoPaymentController extends Controller
{
    protected $nowPayments;

    public function __construct(NowPaymentsService $nowPayments)
    {
        $this->nowPayments = $nowPayments;
    }

    public function create(Request $request)
    {
    $user = auth()->user();

    $paymentData = [
        "price_amount" => $request->amount,
        "price_currency" => "usd",
        "pay_currency" => "btc",
        "ipn_callback_url" => route('crypto.callback'),
        "order_id" => uniqid('order_'),
        "order_description" => "Crypto deposit",
    ];

    $response = $this->nowPayments->createPayment($paymentData);

    // dd($response);

    if (isset($response['invoice_url'])) {
        // Store payment details
        \App\Models\CryptoPayment::create([
            'user_id' => $user->id,
            'order_id' => $paymentData['order_id'],
            'amount' => $request->amount,
        ]);

        return redirect($response['invoice_url']);
    }

    return response()->json($response);
    }


    public function callback(Request $request)
    {
    // Extract data from the webhook payload
    $paymentId = $request->payment_id;
    $paymentStatus = $request->payment_status;
    $orderId = $request->order_id;
    $amountReceived = $request->actually_paid; // In fiat equivalent

    // Optionally: Log the full request for debugging
    \Log::info('NOWPayments callback', $request->all());

    if (in_array($paymentStatus, ['confirmed', 'finished'])) {
        // Find the related payment record
        $payment = \App\Models\CryptoPayment::where('order_id', $orderId)->first();

        if ($payment && !$payment->is_completed) {
            // Mark payment as completed
            $payment->is_completed = true;
            $payment->status = $paymentStatus;
            $payment->save();

            // Credit user's account
            $user = $payment->user;
            $user->account_bal += $amountReceived;
            $user->save();
        }
    }

    // Return 200 OK to acknowledge webhook
    return response('OK', 200);
    }

}
