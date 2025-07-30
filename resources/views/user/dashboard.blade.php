<?php
if (Auth::user()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
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
                        <h2 class="text-{{$text}} pb-2">Welcome, {{ Auth::user()->name }}!</h2>
                            @if ($settings->enable_annoc == "on")
                                <h5 id="ann" class="text-{{$text}}op-7 mb-4">{{$settings->newupdate}}</h5>
                                @if(Session::has('getAnouc') && Session::get('getAnouc') == "true" )
                                    <script type="text/javascript">
                                        var announment = $("#ann").html();
                                        console.log(announment);
                                        swal({
                                            title: "Annoucement!",
                                            text: announment,
                                            icon: "info",
                                            buttons: {
                                                confirm: {
                                                    text: "Okay",
                                                    value: true,
                                                    visible: true,
                                                    className: "btn btn-info",
                                                    closeModal: true
                                                }
                                            }
                                        });
                                    </script>  
                                @endif
                                {{session()->forget('getAnouc')}}
                            @endif

                    </div>
                    <x-danger-alert/>
					<x-success-alert/>
                    
                    <!-- Action Buttons -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-auto">
                            <a href="{{route('deposits')}}" class="btn btn-{{$bg == 'light' ? 'primary' : 'light'}} d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; text-decoration: none;">
                                <i class="fa fa-download mb-1" style="font-size: 24px;"></i>
                                <small class="text-center" style="font-size: 11px; line-height: 1.1;">Deposit</small>
                            </a>
                        </div>
                        <div class="col-auto mx-3">
                            <a href="{{route('withdrawalsdeposits')}}" class="btn btn-{{$bg == 'light' ? 'secondary' : 'outline-light'}} d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; text-decoration: none;">
                                <i class="fa fa-arrow-up mb-1" style="font-size: 24px;"></i>
                                <small class="text-center" style="font-size: 11px; line-height: 1.1;">Withdraw</small>
                            </a>
                        </div>
                        <div class="col-auto">

                            <a href="{{route('mplans')}}" class="btn btn-{{$bg == 'light' ? 'success' : 'outline-success'}} d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; text-decoration: none;">
                                <i class="fa fa-chart-line mb-1" style="font-size: 24px;"></i>
                                <small class="text-center" style="font-size: 11px; line-height: 1.1;">Trade</small>
                            </a>
{{-- 
                            <a href="{{route('withdrawalsdeposits')}}" class="btn btn-{{$bg == 'light' ? 'success' : 'outline-success'}} d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; text-decoration: none;">
                                <i class="fa fa-chart-line mb-1" style="font-size: 24px;"></i>
                                <small class="text-center" style="font-size: 11px; line-height: 1.1;">Trade</small>
                            </a> --}}
                        </div>
                    </div>

<div class="row">
    <!-- Account Balance -->
    <div class="col-6 col-sm-6 col-lg-3 mb-3">
        <div class="p-3 card bg-{{$bg}} shadow h-100" style="border-radius: 12px;">
            <div class="d-flex align-items-center h-100">
                <span class="mr-3 stamp stamp-md bg-secondary">
                    <i class="fa fa-dollar-sign"></i>
                </span>
                <div>
                    <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->account_bal, 2, '.', ',')}}</b></h5>
                    <small class="text-muted">Account Balance</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Profit -->
    <div class="col-6 col-sm-6 col-lg-3 mb-3">
        <div class="p-3 card bg-{{$bg}} shadow h-100" style="border-radius: 12px;">
            <div class="d-flex align-items-center h-100">
                <span class="mr-3 stamp stamp-md bg-success">
                    <i class="fa fa-coins"></i>
                </span>
                <div>
                    <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->roi, 2, '.', ',')}}</b></h5>
                    <small class="text-muted text-{{$text}}">Total Profit</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Bonus -->
    

    <!-- Total Referral Bonus -->
    {{-- <div class="col-6 col-sm-6 col-lg-3 mb-3">
        <div class="p-3 card bg-{{$bg}} shadow h-100">
            <div class="d-flex align-items-center h-100">
                <span class="mr-3 stamp stamp-md bg-info">
                    <i class="fa fa-retweet"></i>
                </span>
                <div>
                    <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->ref_bonus, 2, '.', ',')}}</b></h5>
                    <small class="text-muted text-{{$text}}">Total Referral Bonus</small>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Total Investment Plans -->
    
    <!-- Total Active Investment Plans -->
    
    <!-- Total Deposit -->
    <div class="col-6 col-sm-6 col-lg-3 mb-3">
        <div class="p-3 card bg-{{$bg}} shadow h-100" style="border-radius: 12px;">
            <div class="d-flex align-items-center h-100">
                <span class="mr-3 stamp stamp-md bg-warning">
                    <i class="fa fa-download"></i>
                </span>
                <div>
                    @foreach($deposited as $deposited)
                        @if(!empty($deposited->count))
                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format($deposited->count, 2, '.', ',')}}</b></h5>
                        @else
                        <h5 class="mb-1 text-{{$text}}">{{$settings->currency}}0.00</h5> 
                        @endif
                    @endforeach
                    <small class="text-muted text-{{$text}}">Total Deposit</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Withdrawals -->
    <div class="col-6 col-sm-6 col-lg-3 mb-3" >
        <div class="p-3 card bg-{{$bg}} shadow h-100" style="border-radius: 12px;">
            <div class="d-flex align-items-center h-100">
                <span class="mr-3 stamp stamp-md bg-danger">
                    <i class="fa fa-arrow-alt-circle-up"></i>
                </span>
                <div>
                    @foreach($deposited as $deposited)
                        @if(!empty($deposited->count))
                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format($deposited->count, 2, '.', ',')}}</b></h5>
                        @else
                        <h5 class="mb-1 text-{{$text}}">{{$settings->currency}}0.00</h5> 
                        @endif
                    @endforeach
                    <small class="text-muted text-{{$text}}">Total Withdrawals</small>
                </div>
            </div>
        </div>
    </div>
</div>
                    
                    <div class="row">
                        <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        @include('includes.chart')
                        </div>
                    </div>
                <!-- end of chart -->
            </div>
    @endsection