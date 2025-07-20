@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/trade.css') }}">

@section('content')
    @include('user.topmenu')
    @include('user.sidebar')

    @php
        $bg = Auth::user()->dashboard_style == 'light' ? 'light' : 'dark';
        $text = $bg === 'light' ? 'dark' : 'light';
        $pairMap = [];
        foreach ($currencies as $pair) {
            $pairMap[strtolower($pair->base_currency)] = $pair->coingecko_id;
        }
    @endphp

    <div class="trading-container">
        <!-- Chart Section -->
        <div class="chart-section">
            <div class="pair-selector">
                <div class="current-pair">
                    <div class="pair-icon" id="pair-icon">{{ strtoupper($currencies[0]->base_currency[0] ?? 'B') }}</div>
                    <div class="pair-info">
                        <select name="currency" id="pair-select" class="form-input">
                            @if($currencies->isEmpty())
                                <option value="">No currency pairs available</option>
                            @else
                                @foreach($currencies as $pair)
                                    <option value="{{ strtolower($pair->base_currency) }}"
                                        data-quote="{{ strtolower($pair->quote_currency) }}"
                                        data-coingecko-id="{{ $pair->coingecko_id }}">
                                        {{ strtoupper($pair->base_currency) }}/{{ strtoupper($pair->quote_currency) }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <div class="pair-price" id="live-price">$0.00</div>
                        <div class="pair-change" id="pair-change">0.00% ($0.00)</div>
                    </div>
                </div>
            </div>

            <!-- Open Trades -->
            <div class="open-trades">
                <h4 class="text-{{ $text }} mb-4">Open Trades</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Currency Pair</th>
                            <th>Entry Price</th>
                            <th>Current Price</th>
                            <th>Volume</th>
                            <th>Amount (USD)</th>
                            <th>P/L (USD)</th>
                            @if(Auth::user()->is_admin)
                                <th>User</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($openTrades as $trade)
                            <tr>
                                <td>{{ ucfirst($trade->type) }}</td>
                                <td>{{ strtoupper($trade->pair_base) }}/{{ strtoupper($trade->quote_currency) }}</td>
                                <td>${{ number_format($trade->entry_price, 2) }}</td>
                                <td>${{ number_format($trade->current_price, 2) }}</td>
                                <td>{{ number_format($trade->volume, 6) }}</td>
                                <td>${{ number_format($trade->amount, 2) }}</td>
                                <td class="{{ $trade->unrealized_pl >= 0 ? 'text-success' : 'text-danger' }}">
                                    ${{ number_format($trade->unrealized_pl, 2) }}
                                </td>
                                @if(Auth::user()->is_admin)
                                    <td>{{ $trade->user->name }}</td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ Auth::user()->is_admin ? 8 : 7 }}">No open trades</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Trading Panel -->
        <div class="trading-panel">
            <!-- Balance Card -->
            <div class="balance-card">
                <div class="balance-title">Available Balance</div>
                <div class="balance-amount" id="balance-amount">${{ number_format(Auth::user()->balance, 2) }}</div>
                <div class="balance-usd">≈ {{ number_format(Auth::user()->balance, 2) }} USDT</div>
            </div>

            <!-- Order Form -->
            <div class="order-form">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="order-tabs">
                    <button class="tab-button buy active" data-tab="buy">Buy</button>
                    <button class="tab-button sell" data-tab="sell">Sell</button>
                </div>

                <form id="trading-form" action="{{ route('trade.execute') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" id="order-type" value="buy">
                    <input type="hidden" name="order_type" id="order-type-value" value="market">
                    <input type="hidden" name="pair" id="pair-input" value="{{ strtolower($currencies[0]->base_currency ?? '') }}">

                    <div class="order-type-selector">
                        <button type="button" class="order-type-btn active" data-order-type="market">Market</button>
                        <button type="button" class="order-type-btn" data-order-type="limit">Limit</button>
                        <button type="button" class="order-type-btn" data-order-type="stop">Stop</button>
                    </div>

                    <div class="form-group" id="price-group" style="display: none;">
                        <label class="form-label">Price</label>
                        <div class="price-input-group">
                            <input type="number" name="price" class="form-input" id="price-input" step="0.01" placeholder="0.00">
                            <span class="currency-suffix">USDT</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Amount</label>
                        <div class="price-input-group">
                            <input type="number" name="amount" class="form-input" id="amount-input" step="0.00000001" placeholder="0.00000000" oninput="calculateTotal()">
                            <span class="currency-suffix" id="amount-suffix">{{ strtoupper($currencies[0]->base_currency ?? 'BTC') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Total</label>
                        <div class="price-input-group">
                            <input type="number" class="form-input" id="total-input" step="0.01" placeholder="0.00" oninput="calculateAmount()">
                            <span class="currency-suffix">USDT</span>
                        </div>
                    </div>

                    <div class="advanced-options">
                        <div class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="stop-loss" onchange="toggleAdvancedOption('stop-loss')">
                            <label class="checkbox-label" for="stop-loss">Stop Loss</label>
                        </div>

                        <div class="form-group" id="stop-loss-group" style="display: none;">
                            <label class="form-label">Stop Loss Price</label>
                            <div class="price-input-group">
                                <input type="number" name="stop_loss" class="form-input" id="stop-loss-input" step="0.01" placeholder="0.00">
                                <span class="currency-suffix">USDT</span>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="take-profit" onchange="toggleAdvancedOption('take-profit')">
                            <label class="checkbox-label" for="take-profit">Take Profit</label>
                        </div>

                        <div class="form-group" id="take-profit-group" style="display: none;">
                            <label class="form-label">Take Profit Price</label>
                            <div class="price-input-group">
                                <input type="number" name="take_profit" class="form-input" id="take-profit-input" step="0.01" placeholder="0.00">
                                <span class="currency-suffix">USDT</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-summary">
                        <div class="summary-row">
                            <span class="summary-label">Order Type:</span>
                            <span class="summary-value" id="summary-type">Market Buy</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Fee (0.1%):</span>
                            <span class="summary-value" id="summary-fee">$0.00</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Total Cost:</span>
                            <span class="summary-value" id="summary-total">$0.00</span>
                        </div>
                    </div>

                    <button type="submit" class="submit-button buy-button" id="submit-btn" disabled>
                        Buy <span id="submit-currency">{{ strtoupper($currencies[0]->base_currency ?? 'BTC') }}</span>
                    </button>

                    <div class="insufficient-balance" id="insufficient-balance" style="display: none;">
                        Insufficient balance. You need $0.00 more to complete this order.
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let currentTab = 'buy';
        let currentOrderType = 'market';
        let currentPrice = 0;
        let userBalance = {{ Auth::user()->balance ?? 0 }};
        const pairMap = @json($pairMap);

        async function fetchPairData(symbol) {
            const priceField = document.getElementById('live-price');
            const pairChange = document.getElementById('pair-change');
            const submitBtn = document.getElementById('submit-btn');
            priceField.textContent = 'Loading...';

            if (!symbol || !pairMap[symbol]) {
                console.error('Invalid symbol:', symbol);
                priceField.textContent = 'Symbol not found';
                submitBtn.disabled = true;
                updateSummary();
                return;
            }

            try {
                const response = await fetch(`/api/pair-data/${symbol}`, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });
                if (!response.ok) throw new Error(`HTTP error: ${response.status}`);
                const data = await response.json();
                console.log('Backend response:', data);

                if (data.success && data.price) {
                    currentPrice = data.price;
                    priceField.textContent = `$${currentPrice.toFixed(2)}`;
                    pairChange.textContent = data.change || '0.00% ($0.00)';
                    submitBtn.disabled = false;
                    updateSummary();
                } else {
                    throw new Error(data.error || 'Invalid price data');
                }
            } catch (error) {
                console.error('Error fetching pair data:', error.message);
                priceField.textContent = 'Error loading price';
                submitBtn.disabled = true;
                updateSummary();
            }
        }

        function switchTab(tab) {
            if (tab !== 'buy' && tab !== 'sell') {
                console.error('Invalid tab:', tab);
                return;
            }

            currentTab = tab;
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            const activeButton = document.querySelector(`.tab-button[data-tab="${tab}"]`);
            if (activeButton) {
                activeButton.classList.add('active');
            }
            
            const submitBtn = document.getElementById('submit-btn');
            const orderTypeInput = document.getElementById('order-type');
            const currentCurrency = document.getElementById('pair-select').value.toUpperCase() || 'BTC';
            
            orderTypeInput.value = tab;
            submitBtn.className = `submit-button ${tab === 'buy' ? 'buy-button' : 'sell-button'}`;
            submitBtn.innerHTML = `${tab.charAt(0).toUpperCase() + tab.slice(1)} <span id="submit-currency">${currentCurrency}</span>`;
            updateSummary();
        }

        function selectOrderType(type) {
            if (!['market', 'limit', 'stop'].includes(type)) {
                console.error('Invalid order type:', type);
                return;
            }

            currentOrderType = type;
            document.querySelectorAll('.order-type-btn').forEach(btn => btn.classList.remove('active'));
            const activeButton = document.querySelector(`.order-type-btn[data-order-type="${type}"]`);
            if (activeButton) {
                activeButton.classList.add('active');
            }
            
            const priceGroup = document.getElementById('price-group');
            const orderTypeInput = document.getElementById('order-type-value');
            
            orderTypeInput.value = type;
            if (type === 'limit' || type === 'stop') {
                priceGroup.style.display = 'block';
                document.getElementById('price-input').value = currentPrice ? currentPrice.toFixed(2) : '';
            } else {
                priceGroup.style.display = 'none';
            }
            updateSummary();
        }

        function toggleAdvancedOption(option) {
            const checkbox = document.getElementById(option);
            const group = document.getElementById(`${option}-group`);
            if (checkbox && group) {
                group.style.display = checkbox.checked ? 'block' : 'none';
            }
        }

        function calculateTotal() {
            const amount = parseFloat(document.getElementById('amount-input').value) || 0;
            const price = currentOrderType === 'market' ? currentPrice : (parseFloat(document.getElementById('price-input').value) || currentPrice);
            const total = amount * price;
            document.getElementById('total-input').value = total ? total.toFixed(2) : '';
            updateSummary();
        }

        function calculateAmount() {
            const total = parseFloat(document.getElementById('total-input').value) || 0;
            const price = currentOrderType === 'market' ? currentPrice : (parseFloat(document.getElementById('price-input').value) || currentPrice);
            const amount = price ? total / price : 0;
            document.getElementById('amount-input').value = amount ? amount.toFixed(8) : '';
            updateSummary();
        }

        function updateSummary() {
            const amount = parseFloat(document.getElementById('amount-input').value) || 0;
            const total = parseFloat(document.getElementById('total-input').value) || 0;
            const fee = total * 0.001;
            const totalCost = total + fee;
            
            document.getElementById('summary-type').textContent = `${currentOrderType.charAt(0).toUpperCase() + currentOrderType.slice(1)} ${currentTab.charAt(0).toUpperCase() + currentTab.slice(1)}`;
            document.getElementById('summary-fee').textContent = `$${fee.toFixed(2)}`;
            document.getElementById('summary-total').textContent = `$${totalCost.toFixed(2)}`;
            
            const insufficientDiv = document.getElementById('insufficient-balance');
            const submitBtn = document.getElementById('submit-btn');
            
            if (currentTab === 'buy' && totalCost > userBalance) {
                const needed = totalCost - userBalance;
                insufficientDiv.textContent = `Insufficient balance. You need $${needed.toFixed(2)} more to complete this order.`;
                insufficientDiv.style.display = 'block';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.5';
            } else if (!currentPrice) {
                insufficientDiv.textContent = 'Price data unavailable. Please try again later.';
                insufficientDiv.style.display = 'block';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.5';
            } else {
                insufficientDiv.style.display = 'none';
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
            }
        }

        document.getElementById('pair-select').addEventListener('change', () => {
            const pairSelect = document.getElementById('pair-select');
            const symbol = pairSelect.value;
            const quoteCurrency = pairSelect.options[pairSelect.selectedIndex]?.dataset?.quote?.toUpperCase() || UST;
            
            document.getElementById('pair-icon').textContent = symbol ? symbol.charAt(0).toUpperCase() : 'B';
            document.getElementById('amount-suffix').textContent = symbol ? symbol.toUpperCase() : 'BTC';
            document.getElementById('submit-currency').textContent = symbol ? symbol.toUpperCase() : 'BTC';
            document.getElementById('pair-input').value = symbol || '';
            
            document.querySelectorAll('.currency-suffix').forEach(suffix => {
                if (suffix.id !== 'amount-suffix') {
                    suffix.textContent = quoteCurrency;
                }
            });
            
            if (symbol) {
                fetchPairData(symbol);
            } else {
                document.getElementById('live-price').textContent = 'No pair selected';
                document.getElementById('submit-btn').disabled = true;
                updateSummary();
            }
        });

        document.getElementById('trading-form').addEventListener('submit', function(e) {
            if (!currentPrice) {
                e.preventDefault();
                document.getElementById('insufficient-balance').textContent = 'Cannot submit order: Price data unavailable.';
                document.getElementById('insufficient-balance').style.display = 'block';
            }
        });

        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                const tab = button.dataset.tab;
                switchTab(tab);
            });
        });

        document.querySelectorAll('.order-type-btn').forEach(button => {
            button.addEventListener('click', () => {
                const type = button.dataset.orderType;
                selectOrderType(type);
            });
        });

        function startPricePolling(symbol) {
            if (!symbol) return;
            fetchPairData(symbol);
            setInterval(() => {
                if (document.getElementById('pair-select').value === symbol) {
                    fetchPairData(symbol);
                }
            }, 30000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const pairSelect = document.getElementById('pair-select');
            if (!pairSelect) {
                console.error('pair-select element not found');
                return;
            }
            const symbol = pairSelect.value;
            const quoteCurrency = pairSelect.options[pairSelect.selectedIndex]?.dataset?.quote?.toUpperCase() || 'USDT';
            
            if (symbol) {
                document.getElementById('pair-icon').textContent = symbol.charAt(0).toUpperCase();
                document.getElementById('amount-suffix').textContent = symbol.toUpperCase();
                document.getElementById('submit-currency').textContent = symbol.toUpperCase();
                document.getElementById('pair-input').value = symbol;
                
                document.querySelectorAll('.currency-suffix').forEach(suffix => {
                    if (suffix.id !== 'amount-suffix') {
                        suffix.textContent = quoteCurrency;
                    }
                });
                
                startPricePolling(symbol);
            } else {
                document.getElementById('live-price').textContent = 'No pair selected';
                document.getElementById('submit-btn').disabled = true;
            }
            console.log('Initial pairMap:', @json($pairMap));
            updateSummary();
        });
    </script>
@endsection