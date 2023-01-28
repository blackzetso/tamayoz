@extends('front.layout.app')
@section('content')
    @include('front.layout.nav')
    @include('front.layout.aside')

    <div id="wrapper">
        <!--=============== content-holder ===============-->
        <div class="content-holder" data-pagetitle="{{trans('main-trans.about')}}">
            <!--Content -->
            <div class="content">
                <!-- column-content -->
                <div class="column-content">
                    <!-- scroll-nav-wrap -->
                    {{-- <div class="scroll-nav-wrap">
                        <nav class="scroll-nav">
                            <ul>
                                <li><a class="scroll-link act-link" href="#sec1"><span> {{ trans('main-trans.about') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec2"><span> {{ trans('main-trans.team') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec4"><span> {{ trans('main-trans.services') }} </span></a></li>
                                {{-- <li><a class="scroll-link" href="#sec5"><span>Skills</span></a></li> --}}
                                {{-- <li><a class="scroll-link" href="#sec6"><span> {{ trans('main-trans.partners') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec7"><span> {{ trans('main-trans.testimonials') }} </span></a></li>
                            </ul>
                        </nav>
                    </div> --}}  
                    <div class="psn_button color-bg act-filter"><i class="fal fa-sort"></i> Nav FIlter </div>
                    <!-- scroll-nav-wrap end -->
                    <!-- section -->
                    <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg"  data-bg="{{ asset('front/images/bg/2.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2> {{ $about->title }} </h2>
                                <p> {{ $about->subtitle }} </p>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section -->
                    <section data-scrollax-parent="true">
                        <div class="wrap-inner fl-wrap">
                            <div class="container small-container">
                                <div class="about-wrap">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="about-image fl-wrap">
                                                <img src="{{ asset('front/images') }}/{{ $about->img }}" class="respimg" alt="">
                                                <div class="triangle-dec" data-scrollax="properties: { translateY: '100px' }">
                                                    <span></span>
                                                </div>
                                                <div class="ab_cirle-dec" data-scrollax="properties: { translateY: '-100px' }"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5">
                                            <div class="about-text fl-wrap">
                                                    @php echo $about->content @endphp
                                                 <div class="line-dec fl-wrap"></div>
                                                <a href="{{ $about->url }}" class="btn hide-icon ajax"><i class="fas fa-caret-right"></i><span> {{ $about->button }} </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pattern-bg right-pos"></div>
                    </section>
                    <!-- section end-->
                  
                </div>
                <!-- column wrap end-->
            </div>
            <!-- content  end -->
@endsection
