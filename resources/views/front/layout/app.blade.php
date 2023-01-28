@php
    use App\Models\Setting;
    use App\Models\Contact;

    $setting    = Setting::findOrFail(1);
    $contact    = Contact::findOrFail(1);
@endphp
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> semicolon solutions </title>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap');
        </style>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('front/css/plugins.css') }}">
        @if(App::getLocale() == 'ar')
        <link type="text/css" rel="stylesheet" href="{{ asset('front/css/style-ar.css') }}">
        @else
        <link type="text/css" rel="stylesheet" href="{{ asset('front/css/style-en.css') }}">
        @endif

		<link type="text/css" rel="stylesheet" href="{{ asset('front/css/dark-style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('front/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('ar-font.css') }}">
    </head>
    <body>
        <!--loader-->
        <div class="main-loader-wrap">
            <div class="loader-spin"><span></span></div>
            <div class="loader-dec"></div>
        </div>
        <!--loader end-->
        @yield('content')
                <footer class="main-footer fl-wrap">
                    <!-- footer-wrap end-->
                    <div class="footer-wrap fl-wrap">
                        <!-- footer-inner-->
                        <div class="footer-inner">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>  {{trans('main-trans.Subscribe_to_the_newsletter')}}</h3>
                                    <p> {{trans('main-trans.Receive_mail')}}</p>
                                    <!-- subcribe-form end-->
                                    <div class="subcribe-form fl-wrap">
                                        <form id="subscribe">
                                            <div class="shadow-box fl-wrap">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button">{{trans('main-trans.Subscribe')}} </button>
                                            </div>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-inner end-->
                            <!-- policy-box-->
                            <div class="policy-box fl-wrap">
                                <span>&#169;semicolon {{ date('Y') }}  /  All rights reserved. </span>
                            </div>
                            <!-- policy-box end-->
                            <a class="to-top"><span>{{trans('main-trans.Back_to_top')}} </span><i class="fas fa-caret-up"></i></a>
                        </div>
                        <!-- subcribe-form end-->
                        <!-- footer decor -->
                        <div class="footer-decor">
                        </div>
                        <!-- footer decor end-->
                    </div>
                    <!-- footer-wrap end-->
                </footer>
                <!-- footer end -->
                <div class="share-wrapper">
                    <div class="share-container isShare"></div>
                </div>
            </div>
            <!-- content-holder end -->
        </div>
        <!-- wrapper end -->
        <!-- body bg-->
        <div class="circle-bg">
            <div class="middle-circle"></div>
            <div class="big-circle"></div>
            <div class="small-circle"></div>
        </div>
        <!-- body bg end-->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
        </div>
        <!-- Main end -->        <!--=============== scripts  ===============-->
        <script  src="{{ asset('front/js/jquery.min.js')}}"></script>
        <script  src="{{ asset('front/js/plugins.js')}}"></script>
        <script  src="{{ asset('front/js/scripts.js')}}"></script>
        @yield('script')
    </body>
</html>
