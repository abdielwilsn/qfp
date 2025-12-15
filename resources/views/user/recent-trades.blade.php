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

    <div class="main-panel trades-page" data-theme="{{ $bg }}">
        <div class="content">
            <div class="page-inner">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="header-content">
                        <h1 class="page-title">Recent Trades</h1>
                        <p class="page-subtitle">Track your active and completed trades</p>
                    </div>
                    <div class="balance-card">
                        <div class="balance-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                        <div class="balance-info">
                            <span class="balance-label">Available Balance</span>
                            <span class="balance-value">{{ $settings->currency }}{{ number_format(auth()->user()->account_bal, 2) }}</span>
                        </div>
                    </div>
                </div>

                <x-danger-alert/>
                <x-success-alert/>

                <!-- Stats Overview -->
                @if (!$investments->isEmpty())
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon active-icon">
                                <i class="fa fa-spinner fa-pulse"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">{{ $investments->where('status', 'active')->count() }}</span>
                                <span class="stat-label">Active Trades</span>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon completed-icon">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">{{ $investments->where('status', 'completed')->count() }}</span>
                                <span class="stat-label">Completed</span>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon total-icon">
                                <i class="fa fa-coins"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">{{ $settings->currency }}{{ number_format($investments->sum('amount'), 2) }}</span>
                                <span class="stat-label">Total Invested</span>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Trades Content -->
                <div class="trades-card">
                    @if ($investments->isEmpty())
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="fa fa-chart-line"></i>
                            </div>
                            <h4>No Trades Yet</h4>
                            <p>You haven't made any trades. Start trading to see your history here.</p>
                            <a href="{{ route('trading.pairs') }}" class="empty-action-btn">
                                <i class="fa fa-plus"></i>
                                Start Trading
                            </a>
                        </div>
                    @else
                        <!-- Trades List -->
                        <div class="trades-list">
                            @foreach ($investments as $investment)
                                <div class="trade-item {{ $investment->status === 'active' ? 'active' : '' }}">
                                    <div class="trade-main">
                                        <div class="trade-pair">
                                            <div class="pair-icon">
                                                @if ($investment->tradingPair && $investment->tradingPair->base_icon_url)
                                                    <img src="{{ $investment->tradingPair->base_icon_url ?? asset('images/default-coin.png') }}"
                                                         alt="{{ $investment->tradingPair->base_symbol }}"
                                                         onerror="this.src='https://via.placeholder.com/40'">
                                                @else
                                                    <i class="fa fa-coins"></i>
                                                @endif
                                            </div>
                                            <div class="pair-info">
                                                <span class="pair-symbol">
                                                    {{ $investment->tradingPair ? $investment->tradingPair->base_symbol . '/' . $investment->tradingPair->quote_symbol : 'N/A' }}
                                                </span>
                                                <span class="pair-dates">
                                                    {{ $investment->start_date->format('M d, Y') }}
                                                    <i class="fa fa-arrow-right"></i>
                                                    {{ $investment->end_date ? $investment->end_date->format('M d, Y') : 'Ongoing' }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="trade-status-wrapper">
                                            @if($investment->status === 'active')
                                                <span class="status-badge active">
                                                    <span class="status-dot"></span>
                                                    Active
                                                </span>
                                            @else
                                                <span class="status-badge completed">
                                                    <i class="fa fa-check"></i>
                                                    Completed
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="trade-details">
                                        <div class="detail-item">
                                            <span class="detail-label">Amount</span>
                                            <span class="detail-value">{{ $settings->currency }}{{ number_format($investment->amount, 2) }}</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Profit</span>
                                            <span class="detail-value profit-display"
                                                  data-investment-id="{{ $investment->id }}"
                                                  data-amount="{{ $investment->amount }}"
                                                  data-min-return="{{ $investment->tradingPair ? $investment->tradingPair->min_return_percentage : 0 }}"
                                                  data-max-return="{{ $investment->tradingPair ? $investment->tradingPair->max_return_percentage : 0 }}"
                                                  data-status="{{ $investment->status }}"
                                                  data-profit="{{ $investment->profit ?? 0 }}">
                                                {{ $investment->profit !== null ? $settings->currency . number_format($investment->profit, 2) : 'Calculating...' }}
                                            </span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Time Left</span>
                                            <span class="detail-value countdown-timer"
                                                  data-endtime="{{ $investment->end_date ? $investment->end_date->toISOString() : '' }}">
                                                {{ $investment->end_date ? '' : 'N/A' }}
                                            </span>
                                        </div>
                                    </div>

                                    @if($investment->status === 'active')
                                        <div class="trade-progress">
                                            <div class="progress-bar">
                                                <div class="progress-fill"
                                                     data-start="{{ $investment->start_date->timestamp }}"
                                                     data-end="{{ $investment->end_date ? $investment->end_date->timestamp : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        @if($investments->hasPages())
                            <div class="pagination-wrapper">
                                {{ $investments->links() }}
                            </div>
                        @endif
                    @endif
                </div>

            </div>
        </div>
    </div>

    <style>
        .trades-page {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Theme Variables */
        .trades-page[data-theme="dark"] {
            --bg-primary: #0a0a0f;
            --bg-card: rgba(18, 18, 26, 0.9);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --border-color: rgba(99, 102, 241, 0.15);
            --hover-bg: rgba(99, 102, 241, 0.08);
        }

        .trades-page[data-theme="light"] {
            --bg-primary: #f8fafc;
            --bg-card: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --hover-bg: rgba(99, 102, 241, 0.05);
        }

        .trades-page .content {
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
            font-size: 0.95rem;
            color: var(--text-secondary);
            margin: 0;
        }

        .balance-card {
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 14px 20px;
        }

        .balance-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(99, 102, 241, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6366f1;
            font-size: 18px;
        }

        .balance-info {
            display: flex;
            flex-direction: column;
        }

        .balance-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .balance-value {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .balance-card {
                width: 100%;
            }
        }

        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .stat-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .stat-icon.active-icon {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .stat-icon.completed-icon {
            background: rgba(99, 102, 241, 0.15);
            color: #6366f1;
        }

        .stat-icon.total-icon {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        /* Trades Card */
        .trades-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
        }

        /* Trades List */
        .trades-list {
            padding: 8px;
        }

        .trade-item {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 12px;
            transition: all 0.2s ease;
        }

        .trade-item:last-child {
            margin-bottom: 0;
        }

        .trade-item:hover {
            border-color: rgba(99, 102, 241, 0.3);
        }

        .trade-item.active {
            border-left: 3px solid #10b981;
        }

        .trade-main {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .trade-pair {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .pair-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--hover-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .pair-icon img {
            width: 32px;
            height: 32px;
            object-fit: contain;
        }

        .pair-icon i {
            font-size: 20px;
            color: var(--text-muted);
        }

        .pair-info {
            display: flex;
            flex-direction: column;
        }

        .pair-symbol {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .pair-dates {
            font-size: 0.8rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .pair-dates i {
            font-size: 10px;
        }

        /* Status Badge */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-badge.active {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .status-badge.completed {
            background: rgba(99, 102, 241, 0.15);
            color: #6366f1;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Trade Details */
        .trade-details {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            padding: 16px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        @media (max-width: 576px) {
            .trade-details {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .detail-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }

        .detail-item {
            display: flex;
            flex-direction: column;
        }

        .detail-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .detail-value {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .detail-value.profit-positive {
            color: #10b981;
        }

        .detail-value.profit-negative {
            color: #ef4444;
        }

        .detail-value.countdown-active {
            color: #10b981;
        }

        .detail-value.countdown-expired {
            color: #ef4444;
        }

        /* Progress Bar */
        .trade-progress {
            margin-top: 16px;
        }

        .progress-bar {
            height: 6px;
            background: var(--hover-bg);
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #6366f1, #818cf8);
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
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

        .empty-state h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0 0 8px;
        }

        .empty-state p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin: 0 0 20px;
        }

        .empty-action-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: #6366f1;
            color: white;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .empty-action-btn:hover {
            background: #4f46e5;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px -4px rgba(99, 102, 241, 0.5);
        }

        /* Pagination */
        .pagination-wrapper {
            padding: 20px;
            display: flex;
            justify-content: center;
            border-top: 1px solid var(--border-color);
        }

        .pagination-wrapper .pagination {
            display: flex;
            gap: 6px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .pagination-wrapper .page-item .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            height: 36px;
            padding: 0 12px;
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .pagination-wrapper .page-item .page-link:hover {
            border-color: #6366f1;
            color: #6366f1;
        }

        .pagination-wrapper .page-item.active .page-link {
            background: #6366f1;
            border-color: #6366f1;
            color: white;
        }

        .pagination-wrapper .page-item.disabled .page-link {
            opacity: 0.5;
            pointer-events: none;
        }
    </style>

    <script>
        const currency = '{{ $settings->currency }}';

        function simulateProfits() {
            const profitElements = document.querySelectorAll('.profit-display');

            profitElements.forEach(element => {
                const status = element.dataset.status;
                if (status !== 'active') {
                    // For completed trades, just show the final profit
                    const profit = parseFloat(element.dataset.profit);
                    element.textContent = `${currency}${profit.toFixed(2)}`;
                    element.classList.add(profit >= 0 ? 'profit-positive' : 'profit-negative');
                    return;
                }

                const amount = parseFloat(element.dataset.amount);
                const minReturn = parseFloat(element.dataset.minReturn) / 100;
                const maxReturn = parseFloat(element.dataset.maxReturn) / 100;

                const minProfit = -minReturn * amount;
                const maxProfit = maxReturn * amount;
                const randomProfit = Math.random() * (maxProfit - minProfit) + minProfit;

                element.textContent = `${currency}${randomProfit.toFixed(2)}`;
                element.classList.remove('profit-positive', 'profit-negative');
                element.classList.add(randomProfit >= 0 ? 'profit-positive' : 'profit-negative');
            });
        }

        function updateCountdowns() {
            const countdownElements = document.querySelectorAll('.countdown-timer');

            countdownElements.forEach(el => {
                const endTimeStr = el.dataset.endtime;
                if (!endTimeStr) {
                    el.textContent = 'N/A';
                    return;
                }

                const endTime = new Date(endTimeStr);
                const now = new Date();
                const diff = endTime - now;

                if (diff <= 0) {
                    el.textContent = 'Completed';
                    el.classList.add('countdown-expired');
                    el.classList.remove('countdown-active');
                    return;
                }

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((diff / (1000 * 60)) % 60);
                const seconds = Math.floor((diff / 1000) % 60);

                let timeString = '';
                if (days > 0) {
                    timeString = `${days}d ${String(hours).padStart(2, '0')}h ${String(minutes).padStart(2, '0')}m`;
                } else if (hours > 0) {
                    timeString = `${String(hours).padStart(2, '0')}h ${String(minutes).padStart(2, '0')}m ${String(seconds).padStart(2, '0')}s`;
                } else {
                    timeString = `${String(minutes).padStart(2, '0')}m ${String(seconds).padStart(2, '0')}s`;
                }

                el.textContent = timeString;
                el.classList.add('countdown-active');
                el.classList.remove('countdown-expired');
            });
        }

        function updateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-fill');

            progressBars.forEach(bar => {
                const startTime = parseInt(bar.dataset.start) * 1000;
                const endTime = parseInt(bar.dataset.end) * 1000;

                if (!endTime) return;

                const now = Date.now();
                const total = endTime - startTime;
                const elapsed = now - startTime;
                const progress = Math.min(Math.max((elapsed / total) * 100, 0), 100);

                bar.style.width = `${progress}%`;
            });
        }

        // Initialize
        simulateProfits();
        updateCountdowns();
        updateProgressBars();

        // Update intervals
        setInterval(simulateProfits, 5000);
        setInterval(updateCountdowns, 1000);
        setInterval(updateProgressBars, 1000);
    </script>
@endsection
