<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>
@extends('layouts.app')

@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')

    <div class="main-panel bg-{{ Auth('admin')->User()->dashboard_style }}">
        <div class="content bg-{{ Auth('admin')->User()->dashboard_style }}">
            <div class="page-inner">
                <h2 class="text-{{ $text }}">Manage Trading Pairs</h2>

                <x-success-alert />

                <!-- Form to add new trading pair -->
                <div class="card shadow p-4 bg-{{ Auth('admin')->User()->dashboard_style }}">
                    <form action="{{ route('admin.trading-pairs') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="text-{{ $text }}">Base Currency</label>
                            <input type="text" name="base_currency" class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}" required>
                        </div>
                        <div class="form-group">
    <label class="text-{{ $text }}">CoinGecko ID</label>
    <input type="text" name="coingecko_id" class="form-control" placeholder="e.g., bitcoin, ethereum" required>
</div>

                        <div class="form-group">
                            <label class="text-{{ $text }}">Quote Currency</label>
                            <input type="text" name="quote_currency" class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}" value="USDT" required>
                        </div>
                        <div class="form-group">
                            <label class="text-{{ $text }}">Active</label><br>
                            <input type="checkbox" name="is_active" value="1" checked>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Pair</button>
                    </form>
                </div>

                <!-- List of trading pairs -->
                <h4 class="text-{{ $text }} mt-4">Trading Pairs</h4>
                <table class="table table-bordered table-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}">
                    <thead>
                        <tr>
                            <th>Base Currency</th>
                            <th>Quote Currency</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pairs as $pair)
                            <tr>
                                <td>{{ $pair->base_currency }}</td>
                                <td>{{ $pair->quote_currency }}</td>
                                <td>{{ $pair->is_active ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <form action="{{ route('admin.trading-pairs.toggle', $pair->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm {{ $pair->is_active ? 'btn-warning' : 'btn-success' }}">
                                            {{ $pair->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
