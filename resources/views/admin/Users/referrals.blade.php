<?php
if (Auth('admin')->user()->dashboard_style == "light") {
    $text = "dark";
    $bg = 'light';
} else {
    $text = "light";
    $bg = 'dark';
}
?>
@extends('layouts.app')

@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')

    <div class="main-panel">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <x-danger-alert />
                <x-success-alert />

                <!-- Beginning of User Referrals -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3 card bg-{{ $bg }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="d-inline text-primary">{{ $user->name }}'s Referrals</h1>
                                        <div class="d-inline">
                                            <div class="float-right btn-group">
                                                <a class="btn btn-primary btn-sm" href="{{ route('manageusers') }}">
                                                    <i class="fa fa-arrow-left"></i> Back to Users
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    @if ($referred_users->isEmpty())
                                        <div class="alert alert-info text-{{ $text }}">
                                            No referrals found for this user.
                                        </div>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table text-{{ $text }}">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Joined</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($referred_users as $index => $ref)
                                                    <tr>
                                                        <td>{{ $loop->iteration + ($referred_users->currentPage() - 1) * $referred_users->perPage() }}</td>
                                                        <td>{{ $ref->name }}</td>
                                                        <td>{{ $ref->email }}</td>
                                                        <td>{{ $ref->created_at->toDayDateTimeString() }}</td>
                                                        <td>
                                                            @if ($ref->status == 'active')
                                                                <span class="badge badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-secondary">{{ ucfirst($ref->status ?? 'inactive') }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mt-3">
                                            {{ $referred_users->links() }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of User Referrals -->

            </div>
        </div>
    </div>

    @include('admin.Users.users_actions')
@endsection
