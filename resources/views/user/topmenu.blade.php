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

<div class="main-header header-redesign" data-theme="{{ $bg }}">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="{{ $bgmenu }}">
        <a href="/dashboard" class="logo">
            <span class="logo-text">{{ $settings->site_name }}</span>
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="{{ $bgmenu }}">
        <div class="container-fluid">

            <!-- Quick Actions (Desktop) -->
            <div class="header-actions d-none d-md-flex">
                <a href="{{ route('deposits') }}" class="header-action-btn primary">
                    <i class="fa fa-plus"></i>
                    <span>Deposit</span>
                </a>
                <a href="{{ route('withdrawalsdeposits') }}" class="header-action-btn secondary">
                    <i class="fa fa-arrow-up"></i>
                    <span>Withdraw</span>
                </a>
            </div>

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <!-- Theme Toggle -->

                <!-- Google Translate -->
                @if($settings->google_translate == 'on')
                    <li class="nav-item">
                        <div id="google_translate_element" class="translate-widget"></div>
                    </li>
                @endif

                <!-- KYC Status -->
                @if($settings->enable_kyc == "yes")
                    <li class="nav-item dropdown">
                        <a class="nav-link header-icon-btn" data-toggle="dropdown" href="#" aria-expanded="false" title="KYC Status">
                            <i class="fa fa-shield-alt"></i>
                            @if(Auth::user()->account_verify == 'Verified')
                                <span class="status-dot verified"></span>
                            @else
                                <span class="status-dot pending"></span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right kyc-dropdown animated fadeIn">
                            <div class="dropdown-header">
                                <h6>KYC Verification</h6>
                                @if(Auth::user()->account_verify == 'Verified')
                                    <span class="kyc-status verified">
                                    <i class="fa fa-check-circle"></i> Verified
                                </span>
                                @else
                                    <span class="kyc-status pending">
                                    <i class="fa fa-clock"></i> {{ Auth::user()->account_verify }}
                                </span>
                                @endif
                            </div>
                            @if(Auth::user()->account_verify != 'Verified')
                                <div class="dropdown-body">
                                    <p class="kyc-info">Complete verification to unlock all features</p>
                                    <a href="{{ route('account.verify') }}" class="kyc-verify-btn">
                                        <i class="fa fa-arrow-right"></i>
                                        Verify Now
                                    </a>
                                </div>
                            @endif
                        </div>
                    </li>
                @endif

                <!-- User Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link user-menu-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="user-avatar-sm">
                            <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        </div>
                        <i class="fa fa-chevron-down user-menu-caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right user-dropdown animated fadeIn">
                        <li class="user-dropdown-header">
                            <div class="user-avatar-lg">
                                <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            </div>
                            <div class="user-info">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('dashboard/deposits') }}">
                                <i class="fa fa-plus-circle"></i>
                                Deposit Funds
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('dashboard/withdrawals') }}">
                                <i class="fa fa-arrow-up"></i>
                                Withdraw
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('dashboard/trading-pairs') }}">
                                <i class="fa fa-chart-line"></i>
                                Trade
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item logout-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

<style>
    .header-redesign {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }

    /* Theme Variables */
    .header-redesign[data-theme="dark"] {
        --header-bg: #0a0a0f;
        --header-border: rgba(99, 102, 241, 0.1);
        --text-primary: #f8fafc;
        --text-secondary: #94a3b8;
        --text-muted: #64748b;
        --hover-bg: rgba(99, 102, 241, 0.1);
        --dropdown-bg: #12121a;
        --dropdown-border: rgba(99, 102, 241, 0.15);
        --divider: rgba(255, 255, 255, 0.08);
    }

    .header-redesign[data-theme="light"] {
        --header-bg: #ffffff;
        --header-border: #e2e8f0;
        --text-primary: #0f172a;
        --text-secondary: #64748b;
        --text-muted: #94a3b8;
        --hover-bg: rgba(99, 102, 241, 0.08);
        --dropdown-bg: #ffffff;
        --dropdown-border: #e2e8f0;
        --divider: #e2e8f0;
    }

    .header-redesign .logo-header {
        background: var(--header-bg) !important;
        border-bottom: 1px solid var(--header-border);
    }

    .header-redesign .navbar-header {
        background: var(--header-bg) !important;
        border-bottom: 1px solid var(--header-border);
    }

    /* Logo */
    .header-redesign .logo {
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    .header-redesign .logo-text {
        font-size: 1.35rem;
        font-weight: 700;
        color: var(--text-primary);
        letter-spacing: -0.5px;
    }

    .header-redesign .logo-text::first-letter {
        color: #6366f1;
    }

    /* Header Action Buttons */
    .header-redesign .header-actions {
        display: flex;
        gap: 10px;
    }

    .header-redesign .header-action-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .header-redesign .header-action-btn.primary {
        background: #6366f1;
        color: white;
    }

    .header-redesign .header-action-btn.primary:hover {
        background: #4f46e5;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px -4px rgba(99, 102, 241, 0.5);
    }

    .header-redesign .header-action-btn.secondary {
        background: transparent;
        border: 1px solid var(--header-border);
        color: var(--text-primary);
    }

    .header-redesign .header-action-btn.secondary:hover {
        border-color: #6366f1;
        color: #6366f1;
    }

    .header-redesign .header-action-btn i {
        font-size: 12px;
    }

    /* Theme Toggle */
    .header-redesign .theme-toggle-form {
        margin: 0;
        display: flex;
        align-items: center;
    }

    .header-redesign .theme-toggle {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin: 0;
    }

    .header-redesign .theme-toggle input {
        display: none;
    }

    .header-redesign .toggle-track {
        display: flex;
        align-items: center;
        width: 56px;
        height: 28px;
        background: var(--hover-bg);
        border-radius: 14px;
        padding: 2px;
        position: relative;
        transition: background 0.3s ease;
    }

    .header-redesign .toggle-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        z-index: 1;
        transition: opacity 0.2s ease;
    }

    .header-redesign .toggle-icon.sun {
        left: 8px;
        color: #f59e0b;
        opacity: 1;
    }

    .header-redesign .toggle-icon.moon {
        right: 8px;
        color: #6366f1;
        opacity: 0.4;
    }

    .header-redesign .theme-toggle input:checked ~ .toggle-track .sun {
        opacity: 0.4;
    }

    .header-redesign .theme-toggle input:checked ~ .toggle-track .moon {
        opacity: 1;
    }

    .header-redesign .toggle-thumb {
        width: 22px;
        height: 22px;
        background: white;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .header-redesign .theme-toggle input:checked ~ .toggle-track .toggle-thumb {
        transform: translateX(28px);
    }

    /* Header Icon Button */
    .header-redesign .header-icon-btn {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        color: var(--text-secondary);
        transition: all 0.2s ease;
        position: relative;
    }

    .header-redesign .header-icon-btn:hover {
        background: var(--hover-bg);
        color: #6366f1;
    }

    .header-redesign .status-dot {
        position: absolute;
        top: 6px;
        right: 6px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .header-redesign .status-dot.verified {
        background: #10b981;
        box-shadow: 0 0 0 2px var(--header-bg);
    }

    .header-redesign .status-dot.pending {
        background: #f59e0b;
        box-shadow: 0 0 0 2px var(--header-bg);
    }

    /* KYC Dropdown */
    .header-redesign .kyc-dropdown {
        width: 280px;
        background: var(--dropdown-bg);
        border: 1px solid var(--dropdown-border);
        border-radius: 12px;
        padding: 0;
        overflow: hidden;
        box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.3);
    }

    .header-redesign .kyc-dropdown .dropdown-header {
        padding: 16px;
        border-bottom: 1px solid var(--divider);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-redesign .kyc-dropdown .dropdown-header h6 {
        margin: 0;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-primary);
    }

    .header-redesign .kyc-status {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .header-redesign .kyc-status.verified {
        background: rgba(16, 185, 129, 0.15);
        color: #10b981;
    }

    .header-redesign .kyc-status.pending {
        background: rgba(245, 158, 11, 0.15);
        color: #f59e0b;
    }

    .header-redesign .kyc-dropdown .dropdown-body {
        padding: 16px;
    }

    .header-redesign .kyc-info {
        font-size: 0.85rem;
        color: var(--text-secondary);
        margin: 0 0 12px;
    }

    .header-redesign .kyc-verify-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 10px;
        background: #6366f1;
        color: white;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .header-redesign .kyc-verify-btn:hover {
        background: #4f46e5;
        color: white;
    }

    /* User Menu Toggle */
    .header-redesign .user-menu-toggle {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 10px 6px 6px;
        border-radius: 10px;
        transition: background 0.2s ease;
    }

    .header-redesign .user-menu-toggle:hover {
        background: var(--hover-bg);
    }

    .header-redesign .user-avatar-sm {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: linear-gradient(135deg, #6366f1, #818cf8);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .header-redesign .user-avatar-sm span {
        color: white;
        font-size: 14px;
        font-weight: 600;
    }

    .header-redesign .user-menu-caret {
        font-size: 10px;
        color: var(--text-muted);
        transition: transform 0.2s ease;
    }

    .header-redesign .user-menu-toggle[aria-expanded="true"] .user-menu-caret {
        transform: rotate(180deg);
    }

    /* User Dropdown */
    .header-redesign .user-dropdown {
        width: 260px;
        background: var(--dropdown-bg);
        border: 1px solid var(--dropdown-border);
        border-radius: 12px;
        padding: 0;
        overflow: hidden;
        box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.3);
    }

    .header-redesign .user-dropdown-header {
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 14px;
        border-bottom: 1px solid var(--divider);
    }

    .header-redesign .user-avatar-lg {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, #6366f1, #818cf8);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .header-redesign .user-avatar-lg span {
        color: white;
        font-size: 20px;
        font-weight: 700;
    }

    .header-redesign .user-dropdown-header .user-info h5 {
        margin: 0;
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--text-primary);
    }

    .header-redesign .user-dropdown-header .user-info p {
        margin: 2px 0 0;
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .header-redesign .user-dropdown .dropdown-divider {
        margin: 0;
        border-color: var(--divider);
    }

    .header-redesign .user-dropdown .dropdown-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 20px;
        font-size: 0.875rem;
        color: var(--text-secondary);
        transition: all 0.2s ease;
    }

    .header-redesign .user-dropdown .dropdown-item:hover {
        background: var(--hover-bg);
        color: #6366f1;
    }

    .header-redesign .user-dropdown .dropdown-item i {
        width: 16px;
        font-size: 14px;
        opacity: 0.7;
    }

    .header-redesign .user-dropdown .dropdown-item:hover i {
        opacity: 1;
    }

    .header-redesign .user-dropdown .logout-item {
        color: #ef4444;
    }

    .header-redesign .user-dropdown .logout-item:hover {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .header-redesign .header-actions {
            display: none;
        }
    }
</style>

<script type="text/javascript">
    // Theme toggle
    $("#styleform").on('change', function() {
        $.ajax({
            url: "{{ url('/dashboard/changetheme') }}",
            type: 'POST',
            data: $("#styleform").serialize(),
            success: function(data) {
                location.reload(true);
            },
            error: function(data) {
                console.log(data);
            },
        });
    });
</script>
