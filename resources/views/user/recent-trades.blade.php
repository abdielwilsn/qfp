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
                    <h1 class="title1 text-{{ $text }}">My Recent Trades</h1>
                    <p class="text-{{ $text }}">Current Balance: {{ $settings->currency }}{{ number_format(auth()->user()->account_bal, 2) }}</p>
                </div>
                <x-danger-alert/>
                <x-success-alert/>
                <div class="mb-5">
                    @if ($investments->isEmpty())
                        <div class="card bg-{{ $bg }} p-4 shadow-sm">
                            <h4 class="text-{{ $text }}">You have no recent trades.</h4>
                            <a href="{{ route('user.plans.index') }}" class="btn btn-{{ $bgmenu }} mt-2">Start Investing</a>
                        </div>
                    @else
                        <!-- Desktop Table View -->
                        <div class="d-none d-md-block card bg-{{ $bg }} shadow-sm p-3">
                            <div class="table-responsive">
                                <table class="table table-hover text-{{ $text }}">
                                    <thead>
                                        <tr>
                                            <th>Trading Pair</th>
                                            <th>Amount</th>
                                            <th>Profit</th>
                                            <th>Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($investments as $investment)
                                            <tr>
                                                <td>
                                                    @if ($investment->tradingPair && $investment->tradingPair->base_icon_url)
                                                        <img src="{{ $investment->tradingPair->base_icon_url ?? asset('images/default-coin.png') }}" 
                                                             alt="{{ $investment->tradingPair->base_symbol }}" 
                                                             style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;">
                                                    @endif
                                                    {{ $investment->tradingPair ? $investment->tradingPair->base_symbol . '/' . $investment->tradingPair->quote_symbol : 'N/A' }}
                                                </td>
                                                <td>{{ $settings->currency }}{{ number_format($investment->amount, 2) }}</td>
                                                <td>{{ $investment->profit !== null ? $settings->currency . number_format($investment->profit, 2) : 'N/A' }}</td>
                                                <td>
                                                    <span class="badge {{ $investment->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                                                        {{ ucfirst($investment->status) }}
                                                    </span>
                                                </td>
                                                <td>{{ $investment->start_date->format('Y-m-d H:i') }}</td>
                                                <td>{{ $investment->end_date ? $investment->end_date->format('Y-m-d H:i') : 'N/A' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Mobile Card View -->
                        <div class="d-md-none">
                            @foreach ($investments as $investment)
                                <div class="card bg-{{ $bg }} shadow-sm mb-3 p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            @if ($investment->tradingPair && $investment->tradingPair->base_icon_url)
                                                <img src="{{ $investment->tradingPair->base_icon_url ?? asset('images/default-coin.png') }}" 
                                                     alt="{{ $investment->tradingPair->base_symbol }}" 
                                                     class="me-2" width="28" height="28">
                                            @endif
                                            <div>
                                                <strong class="text-{{ $text }}">
                                                    {{ $investment->tradingPair ? $investment->tradingPair->base_symbol . '/' . $investment->tradingPair->quote_symbol : 'N/A' }}
                                                </strong>
                                            </div>
                                        </div>
                                        <span class="badge {{ $investment->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                                            {{ ucfirst($investment->status) }}
                                        </span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between text-{{ $text }}">
                                            <span>Amount:</span>
                                            <span class="fw-bold">{{ $settings->currency }}{{ number_format($investment->amount, 2) }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between text-{{ $text }}">
                                            <span>Profit:</span>
                                            <span class="fw-bold">{{ $investment->profit !== null ? $settings->currency . number_format($investment->profit, 2) : 'N/A' }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between text-{{ $text }}">
                                            <span>Dates:</span>
                                            <span class="text-muted small">
                                                {{ $investment->start_date->format('Y-m-d') }} to 
                                                {{ $investment->end_date ? $investment->end_date->format('Y-m-d') : 'N/A' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Ensure badges and text are readable */
    .badge {
        font-size: 0.8rem;
        padding: 0.4em 0.6em;
    }

    /* Adjust card padding and font sizes for mobile */
    @media (max-width: 767.98px) {
        .card {
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }
        .card .badge {
            font-size: 0.75rem;
        }
        .text-muted.small {
            font-size: 0.7rem;
        }
        .card .d-flex {
            gap: 0.5rem;
        }
    }

    /* Improve table text size for desktop */
    .table {
        font-size: 0.9rem;
    }
</style>
