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
    @inject('uc', 'App\Http\Controllers\User\UsersController')

    <?php
    $array = \App\Models\User::all();
    $usr = Auth::user()->id;
    $referralCount = Auth::user()->refs->count() ?? 0;
    ?>

    <div class="main-panel referral-page" data-theme="{{ $bg }}">
        <div class="content">
            <div class="page-inner">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="header-content">
                        <h1 class="page-title">Referral Program</h1>
                        <p class="page-subtitle">Invite friends and earn rewards together</p>
                    </div>
                </div>

                <x-danger-alert/>
                <x-success-alert/>

                <!-- Stats Cards -->
                <div class="referral-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value">{{ $referralCount }}</span>
                            <span class="stat-label">Total Referrals</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon earnings">
                            <i class="fa fa-coins"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value">{{ $settings->currency }}{{ number_format(Auth::user()->ref_bonus ?? 0, 2) }}</span>
                            <span class="stat-label">Total Earnings</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon sponsor">
                            <i class="fa fa-user-check"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value sponsor-name">{{ $uc->getUserParent($usr) }}</span>
                            <span class="stat-label">Your Sponsor</span>
                        </div>
                    </div>
                </div>

                <!-- Referral Link Section -->
                <div class="referral-link-card">
                    <div class="card-header-custom">
                        <div class="header-icon">
                            <i class="fa fa-link"></i>
                        </div>
                        <div>
                            <h3>Your Referral Link</h3>
                            <p>Share this link with friends to earn rewards</p>
                        </div>
                    </div>

                    <div class="link-input-wrapper">
                        <input type="text" class="link-input" value="{{ Auth::user()->ref_link }}" id="myInput" readonly>
                        <button class="copy-btn" onclick="copyLink()" id="copyBtn">
                            <i class="fa fa-copy"></i>
                            <span>Copy</span>
                        </button>
                    </div>

                    <div class="referral-id-section">
                        <span class="or-divider">or share your Referral ID</span>
                        <div class="referral-id">
                            <span class="id-label">ID:</span>
                            <span class="id-value">{{ Auth::user()->username }}</span>
                            <button class="copy-id-btn" onclick="copyId()">
                                <i class="fa fa-copy"></i>
                            </button>
                        </div>
                        <input type="hidden" id="refIdInput" value="{{ Auth::user()->username }}">
                    </div>

                    <!-- Share Buttons -->
                    <div class="share-section">
                        <span class="share-label">Share via</span>
                        <div class="share-buttons">
                            <a href="https://wa.me/?text=Join%20{{ $settings->site_name }}%20using%20my%20referral%20link:%20{{ urlencode(Auth::user()->ref_link) }}" target="_blank" class="share-btn whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://t.me/share/url?url={{ urlencode(Auth::user()->ref_link) }}&text=Join%20{{ $settings->site_name }}%20using%20my%20referral%20link" target="_blank" class="share-btn telegram">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=Join%20{{ $settings->site_name }}%20using%20my%20referral%20link:%20{{ urlencode(Auth::user()->ref_link) }}" target="_blank" class="share-btn twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Auth::user()->ref_link) }}" target="_blank" class="share-btn facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Referrals Table -->
                <div class="referrals-table-card">
                    <div class="card-header-custom">
                        <div class="header-icon">
                            <i class="fa fa-user-friends"></i>
                        </div>
                        <div>
                            <h3>Your Referrals</h3>
                            <p>People who joined using your link</p>
                        </div>
                    </div>

                    <div class="table-wrapper">
                        <table class="referrals-table">
                            <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Level</th>
                                <th>Parent</th>
                                <th>Status</th>
                                <th>Joined</th>
                            </tr>
                            </thead>
                            <tbody>
                            {!! $uc->getdownlines($array, $usr) !!}
                            </tbody>
                        </table>

                        <!-- Empty State -->
                        <div class="empty-state" id="emptyState" style="display: none;">
                            <div class="empty-icon">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <h4>No Referrals Yet</h4>
                            <p>Share your referral link to start earning rewards</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        .referral-page {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Theme Variables */
        .referral-page[data-theme="dark"] {
            --bg-primary: #0a0a0f;
            --bg-card: rgba(18, 18, 26, 0.9);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --border-color: rgba(99, 102, 241, 0.15);
            --input-bg: #12121a;
        }

        .referral-page[data-theme="light"] {
            --bg-primary: #f8fafc;
            --bg-card: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --input-bg: #f1f5f9;
        }

        .referral-page .content {
            background: var(--bg-primary) !important;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 28px;
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

        /* Stats Cards */
        .referral-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            .referral-stats {
                grid-template-columns: 1fr;
            }
        }

        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px -10px rgba(0, 0, 0, 0.3);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: rgba(99, 102, 241, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6366f1;
            font-size: 20px;
        }

        .stat-icon.earnings {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .stat-icon.sponsor {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.2;
        }

        .stat-value.sponsor-name {
            font-size: 1.1rem;
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-top: 2px;
        }

        /* Referral Link Card */
        .referral-link-card,
        .referrals-table-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
        }

        .card-header-custom {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
        }

        .header-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        .card-header-custom h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }

        .card-header-custom p {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin: 2px 0 0;
        }

        /* Link Input */
        .link-input-wrapper {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }

        .link-input {
            flex: 1;
            background: var(--input-bg);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 0.9rem;
            color: var(--text-primary);
            font-family: 'Inter', monospace;
        }

        .link-input:focus {
            outline: none;
            border-color: #6366f1;
        }

        .copy-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 14px 24px;
            background: #6366f1;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .copy-btn:hover {
            background: #4f46e5;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px -4px rgba(99, 102, 241, 0.5);
        }

        .copy-btn.copied {
            background: #10b981;
        }

        /* Referral ID Section */
        .referral-id-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .or-divider {
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .referral-id {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--input-bg);
            padding: 10px 16px;
            border-radius: 8px;
        }

        .id-label {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .id-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #10b981;
            font-family: 'Inter', monospace;
        }

        .copy-id-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .copy-id-btn:hover {
            color: #6366f1;
            background: rgba(99, 102, 241, 0.1);
        }

        /* Share Section */
        .share-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .share-label {
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 14px;
        }

        .share-buttons {
            display: flex;
            gap: 12px;
        }

        .share-btn {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .share-btn:hover {
            transform: translateY(-2px);
            color: white;
        }

        .share-btn.whatsapp {
            background: #25D366;
        }

        .share-btn.whatsapp:hover {
            box-shadow: 0 4px 12px -4px rgba(37, 211, 102, 0.5);
        }

        .share-btn.telegram {
            background: #0088cc;
        }

        .share-btn.telegram:hover {
            box-shadow: 0 4px 12px -4px rgba(0, 136, 204, 0.5);
        }

        .share-btn.twitter {
            background: #1DA1F2;
        }

        .share-btn.twitter:hover {
            box-shadow: 0 4px 12px -4px rgba(29, 161, 242, 0.5);
        }

        .share-btn.facebook {
            background: #4267B2;
        }

        .share-btn.facebook:hover {
            box-shadow: 0 4px 12px -4px rgba(66, 103, 178, 0.5);
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
        }

        .referrals-table {
            width: 100%;
            border-collapse: collapse;
        }

        .referrals-table th {
            text-align: left;
            padding: 12px 16px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            border-bottom: 1px solid var(--border-color);
        }

        .referrals-table td {
            padding: 14px 16px;
            font-size: 0.9rem;
            color: var(--text-primary);
            border-bottom: 1px solid var(--border-color);
        }

        .referrals-table tbody tr {
            transition: background 0.2s ease;
        }

        .referrals-table tbody tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }

        .referrals-table tbody tr:last-child td {
            border-bottom: none;
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
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .link-input-wrapper {
                flex-direction: column;
            }

            .copy-btn {
                justify-content: center;
            }

            .share-buttons {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>

    <script>
        function copyLink() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

            // Update button state
            var btn = document.getElementById("copyBtn");
            btn.classList.add("copied");
            btn.innerHTML = '<i class="fa fa-check"></i><span>Copied!</span>';

            // Show notification
            swal({
                title: "Link Copied!",
                text: "Your referral link has been copied to clipboard",
                icon: "success",
                timer: 2000,
                buttons: false
            });

            // Reset button after 2 seconds
            setTimeout(function() {
                btn.classList.remove("copied");
                btn.innerHTML = '<i class="fa fa-copy"></i><span>Copy</span>';
            }, 2000);
        }

        function copyId() {
            var copyText = document.getElementById("refIdInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

            swal({
                title: "ID Copied!",
                text: "Your referral ID has been copied to clipboard",
                icon: "success",
                timer: 2000,
                buttons: false
            });
        }

        // Check if table is empty and show empty state
        document.addEventListener('DOMContentLoaded', function() {
            var tableBody = document.querySelector('.referrals-table tbody');
            if (tableBody && tableBody.children.length === 0) {
                document.getElementById('emptyState').style.display = 'block';
                document.querySelector('.referrals-table').style.display = 'none';
            }
        });
    </script>
@endsection
