<?php
if (Auth::user()->dashboard_style == "light") {
    $bgmenu = "blue";
    $bg = "light";
    $text = "dark";
} else {
    $bgmenu = "dark";
    $bg = "dark";
    $text = "light";
}
?>
@extends('layouts.app')
@section('content')
    @include('user.topmenu')
    @include('user.sidebar')
    <div class="main-panel bg-{{$bg}}">
        <div class="content bg-{{$bg}}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{$text}}">Request for Withdrawal</h1>
                </div>

                <x-danger-alert/>
                <x-success-alert/>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card p-4 bg-{{$bg}}">
                            <div class="card-body">
                                @if ($settings->enable_with == "false")
                                    <div class="alert alert-danger text-center">
                                        Withdrawals are currently disabled. Please check back later.
                                    </div>
                                @else
                                    {{-- BEP20 and Service Charge Notice --}}
                                    <div class="alert alert-info text-center">
                                        💡 We only process withdrawals via <strong>BNB Smart Chain (BEP20)</strong>.
                                        Please make sure your wallet address is USDT on the BEP20 network.<br>
                                        <strong>Withdrawals take 10-15 minutes to verify and process.</strong><br>
                                        <strong>Note:</strong> A {{$settings->withdrawal_percentage}}% service charge will be applied, and you will receive {{100 - $settings->withdrawal_percentage}}% of the requested withdrawal amount.<br>
                                        @if (!empty($settings->telegram_channel) || !empty($settings->admin_telegram))
                                            <div class="mt-3">
                                                @if (!empty($settings->telegram_channel))
                                                    <a href="{{ str_starts_with($settings->telegram_channel, '@') ? 'https://t.me/' . ltrim($settings->telegram_channel, '@') : $settings->telegram_channel }}" class="btn btn-outline-primary btn-sm mr-2" target="_blank">
                                                        <i class="fab fa-telegram-plane"></i> Join Telegram Channel
                                                    </a>
                                                @endif
{{--                                                @if (!empty($settings->admin_telegram))--}}
{{--                                                    <a href="{{ str_starts_with($settings->admin_telegram, '@') ? 'https://t.me/' . ltrim($settings->admin_telegram, '@') : $settings->admin_telegram }}" class="btn btn-outline-primary btn-sm" target="_blank">--}}
{{--                                                        <i class="fab fa-telegram-plane"></i> Contact Admin on Telegram--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
                                            </div>
                                        @endif
                                    </div>

                                    <form action="{{ route('withdrawamount') }}" method="POST">
                                        @csrf

                                        {{-- Amount --}}
                                        <div class="form-group">
                                            <label class="text-{{$text}}">Withdrawal Amount ({{$settings->currency}})</label>
                                            <input type="number" class="form-control" name="amount" required min="1" step="any" placeholder="Enter amount">
                                        </div>

                                        {{-- Wallet Address --}}
                                        <div class="form-group">
                                            <label class="text-{{$text}}">Wallet Address</label>
                                            <input type="text" class="form-control" name="wallet_address" required placeholder="Enter your BEP20 wallet address">
                                        </div>

                                        {{-- Network --}}
                                        <div class="form-group">
                                            <label class="text-{{$text}}">Network</label>
                                            <select class="form-control" name="network" required>
                                                <option value="BSC" selected>BNB Smart Chain (BEP20)</option>
                                            </select>
                                        </div>

                                        {{-- Optional Notes --}}
                                        <div class="form-group">
                                            <label class="text-{{$text}}">Notes (Optional)</label>
                                            <textarea class="form-control" name="notes" rows="3" placeholder="Add any notes for this withdrawal"></textarea>
                                        </div>

                                        {{-- Submit --}}
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-paper-plane"></i> Submit Withdrawal Request
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
