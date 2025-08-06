<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
		$bg="light";
		$text = "dark";
	} else {
		$bgmenu="dark";
		$bg="dark";
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
                                            <input type="text" class="form-control" name="wallet_address" required placeholder="Enter your wallet address">
                                        </div>

                                        {{-- Network --}}
                                        <div class="form-group">
                                            <label class="text-{{$text}}">Network</label>
                                            <select class="form-control" name="network" required>
                                                <option value="">Select Network</option>
                                                <option value="BTC">Bitcoin (BTC)</option>
                                                <option value="ETH">Ethereum (ERC20)</option>
                                                <option value="BSC">BNB Smart Chain (BEP20)</option>
                                                <option value="TRC20">Tron (TRC20)</option>
                                                <option value="SOL">Solana</option>
                                                <option value="Other">Other</option>
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
