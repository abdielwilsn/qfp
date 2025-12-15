<?php
if (Auth::user()->dashboard_style == "light") {
    $bgmenu = "light";
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

    <div class="main-panel trading-pairs-page" data-theme="{{ $bg }}">
        <div class="content">
            <div class="page-inner">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="header-content">
                        <h1 class="page-title">Trading Pairs</h1>
                        <p class="page-subtitle">
                            <span class="live-indicator">
                                <span class="live-dot"></span>
                                Live prices
                            </span>
                            powered by CoinGecko
                        </p>
                    </div>
                    <div class="header-stats">
                        <div class="market-stat">
                            <span class="stat-label">Available Pairs</span>
                            <span class="stat-value">{{ $tradingPairs->count() }}</span>
                        </div>
                    </div>
                </div>

                <x-danger-alert/>
                <x-success-alert/>

                @if ($tradingPairs->isEmpty())
                    <div class="empty-state-card">
                        <div class="empty-icon">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h4>No Trading Pairs Available</h4>
                        <p>Trading pairs are currently being updated. Please check back later.</p>
                    </div>
                @else
                    <!-- Search & Filter Bar -->
                    <div class="filter-bar">
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" id="searchInput" placeholder="Search coins..." autocomplete="off">
                        </div>
                        <div class="filter-tabs">
                            <button class="filter-tab active" data-filter="all">All</button>
                            <button class="filter-tab" data-filter="gainers">Gainers</button>
                            <button class="filter-tab" data-filter="losers">Losers</button>
                        </div>
                    </div>

                    <!-- Trading Pairs Grid -->
                    <div class="pairs-grid" id="pairsGrid">
                        @foreach ($tradingPairs as $pair)
                            <div class="pair-card"
                                 data-name="{{ strtolower($pair->base_name) }}"
                                 data-symbol="{{ strtolower($pair->base_symbol) }}"
                                 data-change="{{ $pair->price_change_24h }}">

                                <div class="pair-header">
                                    <div class="pair-info">
                                        <div class="coin-icon">
                                            <img src="{{ $pair->base_icon_url ?? asset('images/default-coin.png') }}"
                                                 alt="{{ $pair->base_symbol }}"
                                                 onerror="this.src='https://via.placeholder.com/40'">
                                        </div>
                                        <div class="coin-details">
                                            <span class="coin-symbol">{{ $pair->base_symbol }}/{{ $pair->quote_symbol }}</span>
                                            <span class="coin-name">{{ $pair->base_name }}</span>
                                        </div>
                                    </div>
                                    <div class="pair-change" id="change-wrapper-{{ $pair->id }}">
                                        <span class="change-badge {{ $pair->price_change_24h >= 0 ? 'positive' : 'negative' }}"
                                              id="change-{{ $pair->id }}">
                                            <i class="fa fa-{{ $pair->price_change_24h >= 0 ? 'caret-up' : 'caret-down' }}"></i>
                                            {{ number_format(abs($pair->price_change_24h), 2) }}%
                                        </span>
                                    </div>
                                </div>

                                <div class="pair-price">
                                    <span class="price-label">Price</span>
                                    <span class="price-value" id="price-{{ $pair->id }}">
                                        {{ $settings->currency }}{{ number_format($pair->current_price, 2) }}
                                    </span>
                                </div>

                                <div class="pair-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Market Cap</span>
                                        <span class="stat-value">{{ $settings->currency }}{{ formatNumber($pair->market_cap) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">24h Volume</span>
                                        <span class="stat-value">{{ formatNumber($pair->volume_24h) }}</span>
                                    </div>
                                </div>

                                <a href="{{ route('user.trading-pairs.invest', $pair->id) }}" class="trade-btn">
                                    <i class="fa fa-chart-line"></i>
                                    Trade Now
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Desktop Table View (Alternative) -->
                    <div class="table-card d-none">
                        <div class="table-wrapper">
                            <table class="pairs-table">
                                <thead>
                                <tr>
                                    <th>Coin</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-end">24h Change</th>
                                    <th class="text-end">Market Cap</th>
                                    <th class="text-end">24h Volume</th>
                                    <th class="text-end">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tradingPairs as $pair)
                                    <tr>
                                        <td>
                                            <div class="coin-cell">
                                                <img src="{{ $pair->base_icon_url ?? asset('images/default-coin.png') }}"
                                                     alt="{{ $pair->base_symbol }}">
                                                <div class="coin-info">
                                                    <span class="symbol">{{ $pair->base_symbol }}/{{ $pair->quote_symbol }}</span>
                                                    <span class="name">{{ $pair->base_name }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="table-price">{{ $settings->currency }}{{ number_format($pair->current_price, 2) }}</span>
                                        </td>
                                        <td class="text-end">
                                                <span class="table-change {{ $pair->price_change_24h >= 0 ? 'positive' : 'negative' }}">
                                                    {{ number_format($pair->price_change_24h, 2) }}%
                                                </span>
                                        </td>
                                        <td class="text-end">{{ $settings->currency }}{{ formatNumber($pair->market_cap) }}</td>
                                        <td class="text-end">{{ formatNumber($pair->volume_24h) }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('user.trading-pairs.invest', $pair->id) }}" class="table-trade-btn">
                                                Trade
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <style>
        .trading-pairs-page {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Theme Variables */
        .trading-pairs-page[data-theme="dark"] {
            --bg-primary: #0a0a0f;
            --bg-card: rgba(18, 18, 26, 0.9);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --border-color: rgba(99, 102, 241, 0.15);
            --hover-bg: rgba(99, 102, 241, 0.08);
            --input-bg: #12121a;
        }

        .trading-pairs-page[data-theme="light"] {
            --bg-primary: #f8fafc;
            --bg-card: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --hover-bg: rgba(99, 102, 241, 0.05);
            --input-bg: #f1f5f9;
        }

        .trading-pairs-page .content {
            background: var(--bg-primary) !important;
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0 0 6px;
        }

        .page-subtitle {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .live-indicator {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #10b981;
            font-weight: 500;
        }

        .live-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }

        .header-stats {
            display: flex;
            gap: 16px;
        }

        .market-stat {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 12px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .market-stat .stat-label {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .market-stat .stat-value {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        /* Filter Bar */
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            flex: 1;
            max-width: 320px;
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 14px;
        }

        .search-box input {
            width: 100%;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 12px 14px 12px 42px;
            font-size: 0.9rem;
            color: var(--text-primary);
            transition: all 0.2s ease;
        }

        .search-box input::placeholder {
            color: var(--text-muted);
        }

        .search-box input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .filter-tabs {
            display: flex;
            gap: 8px;
        }

        .filter-tab {
            padding: 10px 18px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .filter-tab:hover {
            border-color: #6366f1;
            color: #6366f1;
        }

        .filter-tab.active {
            background: #6366f1;
            border-color: #6366f1;
            color: white;
        }

        /* Pairs Grid */
        .pairs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
        }

        .pair-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.2s ease;
        }

        .pair-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px -10px rgba(0, 0, 0, 0.3);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .pair-card.hidden {
            display: none;
        }

        .pair-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .pair-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .coin-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--hover-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .coin-icon img {
            width: 32px;
            height: 32px;
            object-fit: contain;
        }

        .coin-details {
            display: flex;
            flex-direction: column;
        }

        .coin-symbol {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .coin-name {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .change-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .change-badge.positive {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .change-badge.negative {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        .pair-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 14px;
        }

        .price-label {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .price-value {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .pair-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 16px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-item .stat-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-bottom: 2px;
        }

        .stat-item .stat-value {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-secondary);
        }

        .trade-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 12px;
            background: #6366f1;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .trade-btn:hover {
            background: #4f46e5;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px -4px rgba(99, 102, 241, 0.5);
        }

        /* Empty State */
        .empty-state-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 60px 20px;
            text-align: center;
        }

        .empty-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(99, 102, 241, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #6366f1;
            font-size: 28px;
        }

        .empty-state-card h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0 0 8px;
        }

        .empty-state-card p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin: 0;
        }

        /* Table Card (Alternative View) */
        .table-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .pairs-table {
            width: 100%;
            border-collapse: collapse;
        }

        .pairs-table th {
            padding: 14px 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            background: var(--hover-bg);
            text-align: left;
        }

        .pairs-table td {
            padding: 16px 20px;
            font-size: 0.9rem;
            color: var(--text-primary);
            border-bottom: 1px solid var(--border-color);
        }

        .pairs-table tbody tr:hover {
            background: var(--hover-bg);
        }

        .coin-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .coin-cell img {
            width: 32px;
            height: 32px;
            border-radius: 8px;
        }

        .coin-cell .symbol {
            font-weight: 600;
            display: block;
        }

        .coin-cell .name {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .table-price {
            font-weight: 600;
        }

        .table-change.positive {
            color: #10b981;
        }

        .table-change.negative {
            color: #ef4444;
        }

        .table-trade-btn {
            display: inline-block;
            padding: 8px 16px;
            background: #6366f1;
            color: white;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .table-trade-btn:hover {
            background: #4f46e5;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                max-width: none;
            }

            .filter-tabs {
                justify-content: center;
            }

            .pairs-grid {
                grid-template-columns: 1fr;
            }

            .header-stats {
                display: none;
            }
        }
    </style>

    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.pair-card');

            cards.forEach(card => {
                const name = card.dataset.name;
                const symbol = card.dataset.symbol;

                if (name.includes(searchTerm) || symbol.includes(searchTerm)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });

        // Filter tabs
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Update active tab
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;
                const cards = document.querySelectorAll('.pair-card');

                cards.forEach(card => {
                    const change = parseFloat(card.dataset.change);

                    if (filter === 'all') {
                        card.classList.remove('hidden');
                    } else if (filter === 'gainers' && change >= 0) {
                        card.classList.remove('hidden');
                    } else if (filter === 'losers' && change < 0) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });

        // Refresh prices
        function refreshPrices() {
            fetch('{{ route("admin.trading-pairs.refresh-prices") }}')
                .then(response => response.json())
                .then(data => {
                    if (Array.isArray(data)) {
                        data.forEach(pair => {
                            const priceElement = document.querySelector(`#price-${pair.id}`);
                            const changeElement = document.querySelector(`#change-${pair.id}`);
                            const card = document.querySelector(`.pair-card[data-change]`);

                            if (priceElement) {
                                priceElement.textContent = `{{ $settings->currency }}${parseFloat(pair.current_price).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
                            }

                            if (changeElement) {
                                const change = parseFloat(pair.price_change_24h);
                                const isPositive = change >= 0;
                                changeElement.className = `change-badge ${isPositive ? 'positive' : 'negative'}`;
                                changeElement.innerHTML = `
                                    <i class="fa fa-${isPositive ? 'caret-up' : 'caret-down'}"></i>
                                    ${Math.abs(change).toFixed(2)}%
                                `;
                            }
                        });
                    }
                })
                .catch(error => console.error('Error refreshing prices:', error));
        }

        // Refresh every 15 seconds
        setInterval(refreshPrices, 15000);
    </script>

@endsection

@php
    function formatNumber($num) {
        if ($num >= 1000000000) {
            return number_format($num / 1000000000, 2) . 'B';
        } elseif ($num >= 1000000) {
            return number_format($num / 1000000, 2) . 'M';
        } elseif ($num >= 1000) {
            return number_format($num / 1000, 2) . 'K';
        }
        return number_format($num, 0);
    }
@endphp
