@php
    use App\Models\Setting;
    use App\Models\Contact;
    use App\Models\Social;

    $setting    = Setting::findOrFail(1);
    $contact    = Contact::findOrFail(1);
    $socials    = Social::all();
@endphp
<!--=============== nav-holder-wrap ===============-->
<div class="nav-holder-wrap">
    <!-- navigation -->
    <div class="nav-title"> {{trans('main-trans.menu')}}  </div>
    <div class="nav-holder fl-wrap nv-widget">
        <nav>
            <ul>
                <li>
                    <i class="fal fa-home"></i>
                    <a class="ajax" href="/" > {{trans('main-trans.home')}} </a>
                </li>
                <li>
                    <i class="fas fa-user-tie"></i>
                    <a href="/about#sec4" class="ajax"> {{trans('main-trans.services')}}  </a>
                </li>
                <li>
                    <i class="fal fa-briefcase"></i>
                    <a class="ajax" href="/portfolios" >  {{trans('main-trans.portfolio')}} </a>
                    <!--second level -->
                    {{-- <ul>
                        <li><a href="portfolio.html" class="ajax">Style 1</a></li>
                        <li><a href="portfolio2.html" class="ajax">Style 2</a></li>
                        <li><a href="portfolio3.html" class="ajax">Style 3</a></li>
                        <li><a href="portfolio4.html" class="ajax">Style 4</a></li>
                        <li><a href="portfolio5.html" class="ajax">Style 5</a></li>
                        <li><a href="portfolio6.html" class="ajax">Style 6</a></li>
                    </ul> --}}
                    <!--second level end-->
                </li>
                <li>
                    <i class="fal fa-users"></i>
                    <a href="/about#sec6" class="ajax"> {{trans('main-trans.partners')}} </a>
                </li>
                <li>
                    <i class="fal fa-info"></i>
                    <a href="/about" class="ajax">  {{trans('main-trans.about')}}    </a>
                </li>
                <li>
                    <i class="fal fa-globe"></i>
                    <a href="/contact" class="ajax">  {{trans('main-trans.contact_us')}}    </a>
                </li>
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
                {{-- <li>
                    <i class="fal fa-newspaper"></i>
                    <a href="blog.html" class="ajax">Journal</a>
                </li> --}}
                {{-- <li>
                    <i class="fas fa-code"></i>
                    <a href="/trainings" class="ajax">التدريب</a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <!-- navigation end-->
    <!--nav-contacts  -->
    <div class="nav-title fl-wrap pull-right"> {{trans('main-trans.contact_info')}} </div>
    <div class="nav-contacts fl-wrap nv-widget">
        <ul>
            <li><i class="far fa-envelope"></i><a href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a></li>
            <li><i class="far fa-map-marker"></i><a href="javascript:void(0)" target="_blank"> {{ $contact->adress }} </a></li>
            <li><i class="far fa-phone"></i><a href="tel:{{ $contact->phone }}"> {{ $contact->phone }} </a></li>
        </ul>
    </div>
    <!-- nav-contacts end -->
    <!-- nav-social -->
    <div class="nav-title fl-wrap">    </div>
    <div class="nav-social fl-wrap nv-widget">

        <ul>
            @foreach ($socials as $social)
                <li><a href="{{ $social->url }}" target="_blank"><i class="fab {{ $social->icon }}"></i></a></li>
            @endforeach
        </ul>
    </div>
    <!-- nav-social end -->
</div>
<!-- nav-holder-wrap end-->
