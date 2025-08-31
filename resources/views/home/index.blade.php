@extends('layouts.base')

@section('title', 'Home')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')

    <article class="main-layout__content">
        <!-- Begin page-->
        <section class="intro auth-layout">
            <div class="container">
                <div class="intro__row">
                    <div class="intro__col"> <img class="intro__robot" src="temp/custom/assets/images/intro/robot.png" alt="" role="presentation"/>
                    </div>
                    <div class="intro__col">
                        <div class="intro__content">
                            <h1 class="intro__title">Safe Crypto Trading with {{$settings->site_name}} <span class="intro-bremby"></span>
                            </h1>
                            <div class="intro__description">
                                <p><span class="color-primary">GET</span> ENDLESS RETURNS ON Trades</p>
                            </div>
                            <a class="btn btn--primary" href="login">Get Started</a>

                            <ul class="intro-icons">
                                <li>
                                    <div class="intro-icons__icon" style="width: 100%;">
                                        <svg class="svg-icon">
                                            <use href="temp/custom/assets/icons/sprite.svg#icon-002-blockchain-1"></use>
                                        </svg>
                                    </div>
                                    <div class="intro-icons__description" style="text-align: center;">
                                        <p>Professional Crypto Industry Development Team</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-icons__icon" style="width: 100%;">
                                        <svg class="svg-icon">
                                            <use href="temp/custom/assets/icons/sprite.svg#icon-001-blockchain"></use>
                                        </svg>
                                    </div>
                                    <div class="intro-icons__description" style="text-align: center;">
                                        <p>Unique robot for trading</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-icons__icon" style="width: 100%;">
                                        <svg class="svg-icon">
                                            <use href="temp/custom/assets/icons/sprite.svg#icon-003-user"></use>
                                        </svg>
                                    </div>
                                    <div class="intro-icons__description" style="text-align: center;">
                                        <p>Manage operations without user intervention</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__bg">
                <div id="animation_container" style="background-color: rgba(0, 0, 153, 0.00); width: 100%; height: 50vh; max-height: 858px;">
                    <canvas id="canvas" width="100%" height="100%" style="position: absolute; display: block; background-color: rgba(0, 0, 153, 0.00);"></canvas>
                    <div id="dom_overlay_container" style="pointer-events: none; overflow: hidden; width: 100%; height: 100%; position: absolute; left: 0px; top: 0px; display: block;"></div>
                </div>
            </div>
        </section>

        <!-- TradingView Widget 1 -->
        <div class="tradingview-widget-container" data-aos="fade-up">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                    "colorTheme": "dark",
                    "dateRange": "12m",
                    "showChart": true,
                    "locale": "en",
                    "largeChartUrl": "",
                    "isTransparent": true,
                    "width": "100%",
                    "height": "500",
                    "plotLineColorGrowing": "rgba(65, 224, 136, 1)",
                    "plotLineColorFalling": "rgba(65, 224, 136, 1)",
                    "gridLineColor": "rgba(65, 224, 136, 1)",
                    "scaleFontColor": "rgba(65, 224, 136, 1)",
                    "belowLineFillColorGrowing": "rgba(65, 224, 136, 0.12)",
                    "belowLineFillColorFalling": "rgba(65, 224, 136, 0.12)",
                    "symbolActiveColor": "rgba(65, 224, 136, 0.12)",
                    "tabs": [
                    {"title": "Indices", "symbols": [{"s": "OANDA:SPX500USD", "d": "S&P 500"}, {"s": "OANDA:NAS100USD", "d": "Nasdaq 100"}, {"s": "FOREXCOM:DJI", "d": "Dow 30"}, {"s": "INDEX:NKY", "d": "Nikkei 225"}, {"s": "INDEX:DEU30", "d": "DAX Index"}, {"s": "OANDA:UK100GBP", "d": "FTSE 100"}], "originalTitle": "Indices"},
                    {"title": "Commodities", "symbols": [{"s": "CME_MINI:ES1!", "d": "E-Mini S&P"}, {"s": "CME:6E1!", "d": "Euro"}, {"s": "COMEX:GC1!", "d": "Gold"}, {"s": "NYMEX:CL1!", "d": "Crude Oil"}, {"s": "NYMEX:NG1!", "d": "Natural Gas"}, {"s": "CBOT:ZC1!", "d": "Corn"}], "originalTitle": "Commodities"},
                    {"title": "Bonds", "symbols": [{"s": "CME:GE1!", "d": "Eurodollar"}, {"s": "CBOT:ZB1!", "d": "T-Bond"}, {"s": "CBOT:UB1!", "d": "Ultra T-Bond"}, {"s": "EUREX:FGBL1!", "d": "Euro Bund"}, {"s": "EUREX:FBTP1!", "d": "Euro BTP"}, {"s": "EUREX:FGBM1!", "d": "Euro BOBL"}], "originalTitle": "Bonds"},
                    {"title": "Forex", "symbols": [{"s": "FX:EURUSD"}, {"s": "FX:GBPUSD"}, {"s": "FX:USDJPY"}, {"s": "FX:USDCHF"}, {"s": "FX:AUDUSD"}, {"s": "FX:USDCAD"}], "originalTitle": "Forex"}
                ]
                }
            </script>
        </div>
        <br>

        <!-- TradingView Widget 2 -->
        <div class="tradingview-widget-container__widget swiper-slide" data-aos="fade-down"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
            {
                "width": "100%",
                "height": "400",
                "colorTheme": "dark",
                "currencies": ["EUR", "USD", "JPY", "GBP", "CHF", "AUD", "CAD", "NZD", "CNY"],
                "locale": "en"
            }
        </script>
        </div>
        <br>

        <!-- Other sections remain unchanged -->
        <!-- ... (rest of the template) ... -->

        <div id="button-up">
            <i class="fa fa-chevron-up"></i>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #button-up {
                display: none;
                position: fixed;
                right: 20px;
                bottom: 60px;
                color: #000;
                background-color: white;
                text-align: center;
                font-size: 30px;
                padding: 3px 10px 10px 10px;
                transition: .3s;
                border-radius: 50px;
                width: 50px;
                height: 50px;
                z-index: 9999;
            }

            #button-up:hover {
                cursor: pointer;
                background-color: #E8E8E8;
                transition: .3s;
            }

            /* Mobile-specific adjustments */
            @media (max-width: 768px) {
                .intro__bg #animation_container {
                    height: 30vh;
                    max-height: 400px;
                }
                .intro__row {
                    flex-direction: column;
                    align-items: center;
                }
                .intro__col {
                    width: 100% !important;
                    text-align: center;
                }
                .intro__robot {
                    max-width: 100%;
                    height: auto;
                }
                .tradingview-widget-container {
                    margin-top: -20px; /* Adjust to reduce top space */
                }
                .main-layout__content {
                    padding-top: 0;
                    margin-top: 0;
                }
                .container {
                    padding: 10px;
                }
                body, html {
                    margin: 0;
                    padding: 0;
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                }
                article.main-layout__content {
                    flex: 1 0 auto;
                }
                /* Ensure content fills the viewport */
                .payments-and-footer-wrapper {
                    flex-shrink: 0;
                    padding-top: 0;
                }
            }
        </style>
        <script>
            $(document).ready(function() {
                var button = $('#button-up');
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 300) {
                        button.fadeIn();
                    } else {
                        button.fadeOut();
                    }
                });
                button.on('click', function() {
                    $('body, html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        </script>
        <script src="" async></script>
@endsection
