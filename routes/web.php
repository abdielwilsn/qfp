<?php

use Illuminate\Support\Facades\Route;
use App\Models\Settings;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/home.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';


Route::group(['prefix' => 'payment'], function () {
    Route::get('/', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
    Route::post('/create', [PaymentController::class, 'createPayment'])->name('payment.create');
    Route::get('/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/cancel', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');
    Route::get('/partial/{order_id}', [PaymentController::class, 'paymentPartial'])->name('payment.partial');
    Route::post('/webhook', [PaymentController::class, 'handleWebhook'])->name('payment.webhook');
});

//activate and deactivate Online Trader
Route::any('/activate', function () {
	return view('activate.index',[
		'settings' => Settings::where('id','1')->first(),
	]);
});

Route::any('/revoke', function () {
	return view('revoke.index');
});
