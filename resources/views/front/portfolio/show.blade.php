@extends('front.layout.app')
@section('content')
@include('front.layout.nav')
@include('front.layout.aside')
<div id="wrapper">
    <!--=============== content-holder ===============-->
    <div class="content-holder" data-pagetitle="Project Single 2">
        <!--Content -->
        <div class="content  home-content  full-height">
            <!-- home-slider  -->
            <div class="fs-gallery-wrap home-slider fl-wrap full-height">
                <div class="swiper-container" data-scrollax-parent="true" >
                    <div class="swiper-wrapper" >
                        <!-- swiper-slide-->
                        <div class="swiper-slide">
                            <div class="bg"  data-bg="{{ asset('/front/images/folio') }}/{{ $portfolio->img }}"></div>
                            <a href="{{ asset('/front/images/folio') }}/{{ $portfolio->img }}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>

                        </div>
                        <!-- swiper-slide end-->
                    </div>
                    <div class="sw-button swiper-button-next mob_bottom"><i class="fa fa-angle-right"></i></div>
                    <div class="sw-button swiper-button-prev mob_bottom"><i class="fa fa-angle-left"></i></div>
                    <div class="swiper-pagination"></div>
                    <div class="slider-progress-bar act-slider">
                        <span>
                            <svg class="circ" width="30" height="30">
                                <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none" />
                                <circle class="circ1" cx="15" cy="15" r="13" stroke="#F7B90F" stroke-width="2" fill="none" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <!-- home-slider end-->
        </div>
        <!-- content  -->
        <div class="content">
            <!-- column-content -->
            <div class="column-content pull-right" >
                <!-- section-->
                <section id="sec1">
                    <!-- wrap-inner -->
                    <div class="wrap-inner fl-wrap sm-mar-w">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h2><span> {{ $portfolio->title }} </span></h2>
                                <h4> {{ $portfolio->subtitle }} </h4>
                            </div>
                            <div class="project-detail-wrap fl-wrap">
                                <div class="row" dir="rtl" >
                                    <div class="col-md-4">
                                        <ul class="dec-list">
                                            <li style="text-align:right;direction:rtl" ><span>{{trans('main-trans.section')}} </span> : {{ $portfolio->category->name }} </li>
                                            <li style="text-align:right;direction:rtl"><span> {{trans('main-trans.start_date')}}</span> : {{ $portfolio->date }} </li>
                                            <li style="text-align:right;direction:rtl"><span> {{trans('main-trans.client')}}</span> : {{ $portfolio->client }} </li>
                                            <li style="text-align:right;direction:rtl"><span> {{trans('main-trans.official_site')}}</span> : {{ $portfolio->url }} </li>
                                        </ul>
                                        <a href="{{ $portfolio->url }}" class="btn hide-icon mr-top" target="_blank"><i class="fas fa-caret-right"></i><span>{{trans('main-trans.show_project')}} </span></a>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            {{ $portfolio->content }}
                                        </p>
                                    </div>

                                </div>
                                <!-- page anv end   -->
                                <div class="page-nav bl-nav">
                                    @if ($previousProject)
                                        <a class="ppn ajax" href="/portfolios/{{ $previousProject->id }}">
                                            <span class="nav-text">{{trans('main-trans.previous')}}  </span>
                                            <div class="tooltip">
                                                <img src="{{ asset('front/images/folio') }}/{{ $previousProject->img }}" class="respimg" alt="" title="">
                                                <h5> {{ $previousProject->title }} </h5>
                                            </div>
                                        </a>
                                    @else
                                        <a class="ppn" disabled href="javascript:void(0)">
                                            <span class="nav-text"> {{trans('main-trans.previous')}}</span>
                                            <div class="tooltip">
                                                <img src="images/folio/1.jpg" class="respimg" alt="" title="">
                                                <h5> {{trans('main-trans.No_previous_projects')}}</h5>
                                            </div>
                                        </a>
                                    @endif
                                    <a href="/portfolios" class="appn ajax"><span>  {{trans('main-trans.Back_to_portofolio')}}</span> <i class="fas fa-plus"></i></a>
                                    @if($nextProject)
                                        <a class="npn ajax" href="/portfolios/{{ $nextProject->id }}">
                                            <span class="nav-text">{{trans('main-trans.next')}}</span>
                                            <div class="tooltip">
                                                <img src="{{ asset('front/images/folio') }}/{{ $nextProject->img }}" class="respimg" alt="" title="">
                                                <h5>{{ $nextProject->title }}</h5>
                                            </div>
                                        </a>
                                    @else
                                    <a class="npn" disabled href="javascript:void(0)">
                                        <span class="nav-text">{{trans('main-trans.next')}}</span>
                                        <div class="tooltip">
                                            <img src="images/folio/1.jpg" class="respimg" alt="" title="">
                                            <h5> {{trans('main-trans.No_previous_projects')}}</h5>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                                <!-- page anv end  -->
                            </div>
                        </div>
                        <div class="pattern-bg right-pos"></div>
                        <div class="sec-dec"></div>
                    </div>
                    <!-- wrap-inner  end -->
                </section>
                <!-- section  end -->
            </div>
            <!-- column content  end -->
        </div>
@endsection
