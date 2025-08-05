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
            <div class="mt-2 mb-4 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="title1 text-{{ $text }}">Crypto Trading Pairs</h1>
                <small class="text-muted">Live prices powered by CoinGecko</small>
            </div>

            <x-danger-alert/>
            <x-success-alert/>

            @if ($tradingPairs->isEmpty())
                <div class="card bg-{{ $bg }} p-4 shadow-sm">
                    <h4 class="text-{{ $text }}">No Trading Pairs Available at the Moment.</h4>
                </div>
            @else
                <!-- Desktop Table View -->
                <div class="d-none d-md-block table-responsive shadow-sm rounded bg-{{ $bg }}">
                    <table class="table table-hover table-borderless text-{{ $text }}">
                        <thead class="border-bottom">
                            <tr>
                                <th>Coin</th>
                                <th class="text-end"></th>
                                <th class="text-end">Price</th>
                                <th class="text-end">24h Change</th>
                                <th class="text-end">Market Cap</th>
                                <th class="text-end">24h Volume</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tradingPairs as $pair)
                                <tr class="align-middle">
                                    <td class="d-flex align-items-center">
                                        <img src="{{ $pair->base_icon_url ?? asset('images/default-coin.png') }}" 
                                             alt="{{ $pair->base_symbol }}" 
                                             class="me-2" width="28" height="28">
                                        <div>
                                            <strong>{{ $pair->base_symbol }}/{{ $pair->quote_symbol }}</strong>
                                            <div class="text-muted small">{{ $pair->base_name }}</div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('user.trading-pairs.invest', $pair->id) }}" 
                                           class="btn btn-sm btn-warning fw-bold px-3">
                                           Trade
                                        </a>
                                    </td>
                                    <td class="text-end fw-bold" id="price-{{ $pair->id }}">
                                        {{ $settings->currency }}{{ number_format($pair->current_price, 2) }}
                                    </td>
                                    <td class="text-end fw-bold">
                                        <span id="change-{{ $pair->id }}" 
                                              class="{{ $pair->price_change_24h >= 0 ? 'text-success' : 'text-danger' }}">
                                            {{ number_format($pair->price_change_24h, 2) }}%
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        {{ $settings->currency }}{{ number_format($pair->market_cap, 0) }}
                                    </td>
                                    <td class="text-end">
                                        {{ number_format($pair->volume_24h, 0) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="d-md-none">
                    @foreach ($tradingPairs as $pair)
                        <div class="card bg-{{ $bg }} shadow-sm mb-3 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $pair->base_icon_url ?? asset('images/default-coin.png') }}" 
                                         alt="{{ $pair->base_symbol }}" 
                                         class="me-2" width="32" height="32">
                                    <div>
                                        <strong class="text-{{ $text }}">{{ $pair->base_symbol }}/{{ $pair->quote_symbol }}</strong>
                                        <div class="text-muted small">{{ $pair->base_name }}</div>
                                    </div>
                                </div>
                                <a href="{{ route('user.trading-pairs.invest', $pair->id) }}" 
                                   class="btn btn-sm btn-warning fw-bold px-3">
                                   Invest
                                </a>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between text-{{ $text }}">
                                    <span>Price:</span>
                                    <span id="price-{{ $pair->id }}" class="fw-bold">
                                        {{ $settings->currency }}{{ number_format($pair->current_price, 2) }}
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between text-{{ $text }}">
                                    <span>24h Change:</span>
                                    <span id="change-{{ $pair->id }}" 
                                          class="{{ $pair->price_change_24h >= 0 ? 'text-success' : 'text-danger' }} fw-bold">
                                        {{ number_format($pair->price_change_24h, 2) }}%
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

<script>
    // Periodically refresh prices to mimic Bybit live update
    function refreshPrices() {
        fetch('{{ route("admin.trading-pairs.refresh-prices") }}')
            .then(response => response.json())
            .then(data => {
                if (Array.isArray(data)) {
                    data.forEach(pair => {
                        const priceElement = document.querySelector(`#price-${pair.id}`);
                        const changeElement = document.querySelector(`#change-${pair.id}`);
                        if (priceElement) {
                            priceElement.textContent = `{{ $settings->currency }}${parseFloat(pair.current_price).toFixed(2)}`;
                        }
                        if (changeElement) {
                            changeElement.textContent = `${parseFloat(pair.price_change_24h).toFixed(2)}%`;
                            changeElement.className = pair.price_change_24h >= 0 ? 'text-success fw-bold' : 'text-danger fw-bold';
                        }
                    });
                }
            })
            .catch(error => console.error('Error refreshing prices:', error));
    }

    // Refresh every 15 seconds
    setInterval(refreshPrices, 15000);
</script>

<style>
    /* Ensure buttons are touch-friendly */
    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }

    /* Adjust card padding and font sizes for mobile */
    @media (max-width: 767.98px) {
        .card {
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }
        .card .btn {
            font-size: 0.85rem;
            padding: 0.4rem 0.8rem;
        }
        .text-muted.small {
            font-size: 0.75rem;
        }
    }

    /* Ensure table text is readable */
    .table {
        font-size: 0.9rem;
    }

    /* Improve spacing for mobile cards */
    .card .d-flex {
        gap: 0.5rem;
    }
</style>
@endsection
