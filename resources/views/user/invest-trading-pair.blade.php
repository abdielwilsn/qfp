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

<div class="main-panel bg-{{ $bg }}">
    <div class="content bg-{{ $bg }}">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-{{ $text }}">Invest in {{ $tradingPair->base_symbol }}/{{ $tradingPair->quote_symbol }}</h1>
                <p class="text-muted">Set the amount you want to invest and review details below.</p>
            </div>

            <x-danger-alert/>
            <x-success-alert/>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-{{ $bg }} shadow-sm p-4 border">
                        <!-- Coin Header -->
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ $tradingPair->base_icon_url ?? 'https://via.placeholder.com/32' }}" 
                                 alt="{{ $tradingPair->base_symbol }}" 
                                 class="me-3" width="40" height="40">
                            <div>
                                <h4 class="mb-0 text-{{ $text }}">{{ $tradingPair->base_symbol }}/{{ $tradingPair->quote_symbol }}</h4>
                                <small class="text-muted">{{ $tradingPair->base_name }}</small>
                            </div>
                        </div>

                        <!-- Price & Change -->
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="text-{{ $text }}">
                                <strong>Current Price:</strong> 
                                {{ $settings->currency }}{{ number_format($tradingPair->current_price, 2) }}
                            </div>
                            <div>
                                <strong>24h Change:</strong> 
                                <span class="{{ $tradingPair->price_change_24h >= 0 ? 'text-success' : 'text-danger' }}">
                                    {{ number_format($tradingPair->price_change_24h, 2) }}%
                                </span>
                            </div>
                        </div>

                        <!-- Investment Details -->
                        <div class="mb-3 text-{{ $text }}">
                            <div>Min Investment: <strong>{{ $settings->currency }}{{ number_format($tradingPair->min_investment, 2) }}</strong></div>
                            <div>Max Investment: <strong>{{ $settings->currency }}{{ number_format($tradingPair->max_investment, 2) }}</strong></div>
                            <div>Expected Return: <strong>{{ $tradingPair->min_return_percentage }}% - {{ $tradingPair->max_return_percentage }}%</strong></div>
                            <div>Duration: <strong>{{ $tradingPair->investment_duration }} days</strong></div>
                        </div>

                        <!-- Investment Form -->
                        <form action="{{ route('user.trading-pairs.store-investment', $tradingPair->id) }}" method="POST" class="mt-3">
                            @csrf
                            <div class="mb-3">
                                <label for="amount" class="form-label text-{{ $text }}">Investment Amount ({{ $settings->currency }})</label>
                                <input type="number" 
                                       name="amount" 
                                       id="amount" 
                                       class="form-control bg-{{ $bg }} text-{{ $text }}" 
                                       min="{{ $tradingPair->min_investment }}" 
                                       max="{{ $tradingPair->max_investment }}" 
                                       step="0.01"
                                       value="{{ old('amount') }}"
                                       placeholder="{{ $tradingPair->min_investment }} - {{ $tradingPair->max_investment }}">
                                @error('amount')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-warning w-100 fw-bold py-2">Confirm Investment</button>
                            {{-- <a href="{{ route('user.trading.pair.show') }}" class="btn btn-outline-secondary w-100 mt-2">Cancel</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
