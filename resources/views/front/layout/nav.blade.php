@php
    use App\Models\Setting;
    use App\Models\Contact;

    $setting    = Setting::findOrFail(1);
    $contact    = Contact::findOrFail(1);
@endphp
<div id="main">
    <!-- progress-bar  -->
    <div class="progress-bar-wrap">
        <div class="progress-bar"></div>
    </div>
    <!-- progress-bar end -->
    <!--=============== header main-header ===============-->
    <header class="main-header">
        <!-- logo-holder-->
        <div class="logo-holder">
            <a href="/" class="ajax"><img src="{{ asset('front/images') }}/{{ $setting->logo }}" style="height: 67px;margin-top: 8px;" alt=""></a>
        </div>
        <!-- logo-holder end-->
        <!-- breadcrumb-wrap-->
        <div class="breadcrumb-wrap">
            <span></span>
        </div>
        <!-- breadcrumb-wrap end-->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap vis-menbut">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!-- share button-->
        <div class="share-button show-share">
            <i class="fa fa-bullhorn"></i><span>{{trans('main-trans.share')}} </span>
        </div>
        <!-- share button end-->

{{--        <ul class="nav navbar-nav ml-auto">--}}

{{--            <div class="btn-group mb-1">--}}
{{--                <div class="dropdown-menu">--}}
{{--                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                            {{ $properties['native'] }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </ul>--}}
        <div class="nav-holder fl-wrap nv-widget lang-button">
            <nav>
                <ul>
                    <li>
                        <i class="fal fa-language"></i>
                        <a> {{trans('main-trans.lang')}} </a>
                        <!--second level -->
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" > {{ $properties['native'] }}  </a></li>
                            @endforeach
                        </ul>
                        <!--second level end-->
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header   end-->
