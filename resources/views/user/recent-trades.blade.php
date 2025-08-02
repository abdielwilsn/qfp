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
                </div>
                <x-danger-alert/>
                <x-success-alert/>
                <div class="mb-5">
                    @if ($investments->isEmpty())
                        <div class="card bg-{{ $bg }} p-4">
                            <h4 class="text-{{ $text }}">You have no recent trades.</h4>
                        </div>
                    @else
                        <div class="card bg-{{ $bg }} shadow-sm p-3">
                            <div class="table-responsive">
                                <table class="table table-hover text-{{ $text }}">
                                    <thead>
                                        <tr>
                                            <th>Trading Pair</th>
                                            <th>Amount</th>
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
                                                        <img src="{{ $investment->tradingPair->base_icon_url }}" alt="{{ $investment->tradingPair->base_symbol }}" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;">
                                                    @endif
                                                    {{ $investment->tradingPair ? $investment->tradingPair->base_symbol . '/' . $investment->tradingPair->quote_symbol : 'N/A' }}
                                                </td>
                                                <td>{{ $settings->currency }}{{ number_format($investment->amount, 2) }}</td>
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
                    @endif
                </div>
            </div>
        </div>
    @endsection
