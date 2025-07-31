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
                    
                    <!-- Curved Welcome Section -->
                    <div class="welcome-section" style="
                        background: linear-gradient(135deg, #287d04 0%, #1e7e34 100%);
                        border-radius: 0 0 30px 30px;
                        padding: 30px 20px 40px 20px;
                        margin: -30px -20px 30px -20px;
                        position: relative;
                        overflow: hidden;
                    ">
                        <!-- Decorative Elements -->
                        <div style="
                            position: absolute;
                            top: -50px;
                            right: -50px;
                            width: 150px;
                            height: 150px;
                            background: rgba(255, 198, 125, 0.1);
                            border-radius: 50%;
                        "></div>
                        <div style="
                            position: absolute;
                            bottom: -30px;
                            left: -30px;
                            width: 100px;
                            height: 100px;
                            background: rgba(248, 226, 49, 0.1);
                            border-radius: 50%;
                        "></div>
                        
                        <!-- Welcome Content -->
                        <div class="mt-2 mb-4" style="position: relative; z-index: 2;">
                            <h2 class="text-white pb-2" style="font-weight: 600;">Welcome, {{ Auth::user()->name }}!</h2>
                                @if ($settings->enable_annoc == "on")
                                    <h5 id="ann" class="text-white-50 mb-4">{{$settings->newupdate}}</h5>
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

                        <!-- Action Buttons -->
                        <div class="row justify-content-center mb-4" style="position: relative; z-index: 2;">
                            <div class="col-auto">
                                <a href="{{route('deposits')}}" class="btn btn-light d-flex flex-column align-items-center justify-content-center rounded-circle shadow-lg" style="
                                    width: 80px; 
                                    height: 80px; 
                                    text-decoration: none;
                                    background: linear-gradient(135deg, #FFC67D 0%, #FFD7BE 100%);
                                    border: none;
                                    transition: all 0.3s ease;
                                " onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    <i class="fa fa-download mb-1 text-dark" style="font-size: 24px;"></i>
                                    <small class="text-center text-dark" style="font-size: 11px; line-height: 1.1; font-weight: 600;">Deposit</small>
                                </a>
                            </div>
                            <div class="col-auto mx-3">
                                <a href="{{route('withdrawalsdeposits')}}" class="btn btn-light d-flex flex-column align-items-center justify-content-center rounded-circle shadow-lg" style="
                                    width: 80px; 
                                    height: 80px; 
                                    text-decoration: none;
                                    background: linear-gradient(135deg, #F8E231 0%, #FFC67D 100%);
                                    border: none;
                                    transition: all 0.3s ease;
                                " onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    <i class="fa fa-arrow-up mb-1 text-dark" style="font-size: 24px;"></i>
                                    <small class="text-center text-dark" style="font-size: 11px; line-height: 1.1; font-weight: 600;">Withdraw</small>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('mplans')}}" class="btn btn-light d-flex flex-column align-items-center justify-content-center rounded-circle shadow-lg" style="
                                    width: 80px; 
                                    height: 80px; 
                                    text-decoration: none;
                                    background: linear-gradient(135deg, #ACFFAC 0%, #32CD32 100%);
                                    border: none;
                                    transition: all 0.3s ease;
                                " onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    <i class="fa fa-chart-line mb-1 text-dark" style="font-size: 24px;"></i>
                                    <small class="text-center text-dark" style="font-size: 11px; line-height: 1.1; font-weight: 600;">Trade</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <x-danger-alert/>
					<x-success-alert/>

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