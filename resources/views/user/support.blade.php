<?php
 if (Auth::user()->dashboard_style == "light") {
 $bgmenu="blue";
 $bg="light";
 $text = "dark";
} else {
 $bgmenu="dark";
 $bg="dark";
 $text = "light";
}
?>
@extends('layouts.app')

{{-- @push('styles') --}}
<style>
    .support-page-wrapper {
        min-height: 100vh;
        /* background: linear-gradient(135deg,  */
            /* {{ $bg == 'dark' ? '#1a237e 0%, #3949ab 100%' : '#e3f2fd 0%, #bbdefb 100%' }}); */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .support-container {
        /* background: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.1)' : 'rgba(255, 255, 255, 0.95)' }}; */
        backdrop-filter: blur(15px);
        border-radius: 25px;
        padding: 60px 50px;
        max-width: 700px;
        width: 100%;
        text-align: center;
        box-shadow: {{ $bg == 'dark' ? '0 25px 70px rgba(0, 0, 0, 0.4)' : '0 25px 70px rgba(0, 0, 0, 0.15)' }};
        border: 1px solid {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.2)' : 'rgba(255, 255, 255, 0.5)' }};
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out;
    }

    .support-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: {{ $bg == 'dark' ? 'radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%)' : 'radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%)' }};
        animation: rotate 20s linear infinite;
        z-index: -1;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .support-title {
        color: {{ $bg == 'dark' ? '#ffffff' : '#1e3a8a' }};
        font-size: 3.5rem;
        font-weight: 300;
        margin-bottom: 25px;
        letter-spacing: -1px;
        text-shadow: {{ $bg == 'dark' ? '0 2px 10px rgba(0,0,0,0.3)' : '0 2px 10px rgba(0,0,0,0.1)' }};
    }

    .support-subtitle {
        color: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.85)' : '#475569' }};
        font-size: 1.3rem;
        margin-bottom: 50px;
        line-height: 1.6;
        font-weight: 400;
    }

    .modern-form-group {
        margin-bottom: 35px;
        text-align: left;
        position: relative;
    }

    .modern-label {
        color: {{ $bg == 'dark' ? '#ffffff' : '#1e3a8a' }};
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 12px;
        display: block;
        letter-spacing: 0.3px;
    }

    .modern-textarea {
        width: 100%;
        min-height: 220px;
        padding: 25px;
        background: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.1)' : 'rgba(255, 255, 255, 0.8)' }};
        border: 2px solid {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.2)' : 'rgba(59, 130, 246, 0.3)' }};
        border-radius: 20px;
        color: {{ $bg == 'dark' ? '#ffffff' : '#1e293b' }};
        font-size: 1.1rem;
        font-family: inherit;
        resize: vertical;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
        line-height: 1.6;
    }

    .modern-textarea:focus {
        outline: none;
        border-color: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.6)' : '#3b82f6' }};
        background: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.15)' : 'rgba(255, 255, 255, 0.95)' }};
        transform: translateY(-3px);
        box-shadow: {{ $bg == 'dark' ? '0 15px 40px rgba(0, 0, 0, 0.3)' : '0 15px 40px rgba(59, 130, 246, 0.2)' }};
    }

    .modern-textarea::placeholder {
        color: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.6)' : 'rgba(30, 41, 59, 0.6)' }};
        font-style: italic;
    }

    .modern-send-button {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border: none;
        padding: 20px 70px;
        font-size: 1.3rem;
        font-weight: 700;
        border-radius: 60px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        margin-top: 30px;
        box-shadow: 0 10px 35px rgba(16, 185, 129, 0.4);
        letter-spacing: 1px;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .modern-send-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
        z-index: -1;
    }

    .modern-send-button:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 50px rgba(16, 185, 129, 0.5);
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
    }

    .modern-send-button:hover::before {
        left: 100%;
    }

    .modern-send-button:active {
        transform: translateY(-2px);
    }

    .modern-send-button:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    /* Alert enhancements */
    .alert-enhancement {
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: none;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {
        .support-container {
            padding: 50px 40px;
            margin: 20px;
        }

        .support-title {
            font-size: 3rem;
        }

        .support-subtitle {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 768px) {
        .support-container {
            padding: 40px 30px;
        }

        .support-title {
            font-size: 2.5rem;
        }

        .support-subtitle {
            font-size: 1.1rem;
            margin-bottom: 40px;
        }

        .modern-textarea {
            min-height: 180px;
            padding: 20px;
            font-size: 1rem;
        }

        .modern-send-button {
            padding: 18px 60px;
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .support-page-wrapper {
            padding: 20px 10px;
        }

        .support-container {
            padding: 30px 20px;
        }

        .support-title {
            font-size: 2rem;
        }

        .support-subtitle {
            font-size: 1rem;
        }

        .modern-send-button {
            padding: 16px 50px;
            font-size: 1.1rem;
        }
    }
</style>
{{-- @endpush --}}

@section('content')
@include('user.topmenu')
@include('user.sidebar')

<div class="main-panel bg-{{$bg}}">
    <div class="content bg-{{$bg}}">
        <div class="page-inner">
            <div class="support-page-wrapper">
                <div class="support-container">
                    <!-- Enhanced Alert Messages -->
                    <div class="alert-enhancement">
                        <x-danger-alert/>
                        <x-success-alert/>
                    </div>

                    <h1 class="support-title">{{$settings->site_name}} Support</h1>
                    <p class="support-subtitle">
                        For inquiries, suggestions or complains,<br>
                        mail us and we'll get back to you shortly
                    </p>
                    
                    <form method="post" action="{{route('enquiry')}}" id="modernSupportForm">
                        @csrf
                        <input type="hidden" name="name" value="{{Auth::user()->name}}" />
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        
                        <div class="modern-form-group">
                            <label for="message" class="modern-label">
                                Message <span style="color: #ef4444;">*</span>
                            </label>
                            <textarea 
                                id="message"
                                name="message" 
                                class="modern-textarea"
                                placeholder="Tell us what's on your mind. We're here to help..."
                                required
                                rows="8"
                            ></textarea>
                        </div>
                        
                        <button type="submit" class="modern-send-button" id="submitBtn">
                            <span id="buttonText">Send Message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('modernSupportForm');
    const submitBtn = document.getElementById('submitBtn');
    const buttonText = document.getElementById('buttonText');
    const textarea = document.getElementById('message');
    
    // Add character counter
    const charCounter = document.createElement('div');
    charCounter.style.cssText = `
        text-align: right;
        margin-top: 8px;
        font-size: 0.9rem;
        color: {{ $bg == 'dark' ? 'rgba(255, 255, 255, 0.6)' : 'rgba(30, 41, 59, 0.6)' }};
        font-weight: 500;
    `;
    textarea.parentNode.appendChild(charCounter);
    
    // Update character counter
    textarea.addEventListener('input', function() {
        const count = this.value.length;
        charCounter.textContent = `${count} characters`;
        
        if (count > 500) {
            charCounter.style.color = '#ef4444';
        } else {
            charCounter.style.color = '{{ $bg == "dark" ? "rgba(255, 255, 255, 0.6)" : "rgba(30, 41, 59, 0.6)" }}';
        }
    });
    
    // Enhanced form submission
    form.addEventListener('submit', function(e) {
        const message = textarea.value.trim();
        
        if (!message) {
            e.preventDefault();
            textarea.focus();
            textarea.style.borderColor = '#ef4444';
            setTimeout(() => {
                textarea.style.borderColor = '';
            }, 3000);
            return;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        buttonText.textContent = 'Sending...';
        submitBtn.style.background = 'linear-gradient(135deg, #6b7280 0%, #4b5563 100%)';
    });
    
    // Add floating animation to container
    const container = document.querySelector('.support-container');
    let floatDirection = 1;
    
    setInterval(() => {
        container.style.transform = `translateY(${Math.sin(Date.now() * 0.001) * 3}px)`;
    }, 16);
    
    // Add typing effect to placeholder
    const placeholders = [
        "Tell us what's on your mind. We're here to help...",
        "Describe your issue or question in detail...",
        "Share your feedback or suggestions with us...",
        "Let us know how we can assist you better..."
    ];
    
    let placeholderIndex = 0;
    setInterval(() => {
        placeholderIndex = (placeholderIndex + 1) % placeholders.length;
        textarea.placeholder = placeholders[placeholderIndex];
    }, 4000);
});
</script>
@endpush
@endsection