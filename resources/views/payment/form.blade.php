{{-- resources/views/payment/form.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crypto Payment') }}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('payment.create') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="amount">{{ __('Amount') }}</label>
                            <input id="amount" type="number" step="0.01" class="form-control @error('amount') is-invalid @enderror" 
                                   name="amount" value="{{ old('amount') }}" required autofocus>
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="currency">{{ __('Price Currency') }}</label>
                            <select id="currency" class="form-control @error('currency') is-invalid @enderror" name="currency" required>
                                <option value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD</option>
                                <option value="EUR" {{ old('currency') == 'EUR' ? 'selected' : '' }}>EUR</option>
                                <option value="GBP" {{ old('currency') == 'GBP' ? 'selected' : '' }}>GBP</option>
                            </select>
                            @error('currency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="pay_currency">{{ __('Payment Method') }}</label>
                            <select id="pay_currency" class="form-control" name="pay_currency" required>
                                <option value="usdt" selected>USDT (Tether)</option>
                            </select>
                            <small class="form-text text-muted">Payments will be processed using USDT (Tether)</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">{{ __('Description') }}</label>
                            <input id="description" type="text" class="form-control" name="description" 
                                   value="{{ old('description') }}" placeholder="Payment description">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Pay with Crypto') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection