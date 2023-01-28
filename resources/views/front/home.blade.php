@extends('front.layout.app')

@section('content')
<!--================= main start ================-->
    @include('front.layout.nav')
    @include('front.layout.aside')
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!--=============== content-holder ===============-->
        <div class="content-holder" data-pagetitle="{{trans('main-trans.home')}}">
            <!--Content -->
            <div class="content full-height home-content">
                <!-- home-slider  -->
                <div class="fs-gallery-wrap home-slider fl-wrap full-height" data-autoplayslider="5000">
                    <div class="swiper-container" data-scrollax-parent="true" >
                        <div class="swiper-wrapper">
                            @foreach($sliders as $row)
                            <!-- swiper-slide-->
                            <div class="swiper-slide">
                                <div class="fs-slider-item full-height fl-wrap">
                                    <div class="bg"  data-bg="front/images/bg/{{ $row->img }}" data-swiper-parallax="40%"></div>
                                    <a href="front/images/bg/{{ $row->img }}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>
                                    <div class="overlay"></div>
                                    <!-- hero-wrap-->
                                    <div class="hero-wrap">
                                        <div class="container">
                                            <div class="hero-item">
                                                <h3>{{trans('main-trans.welcome')}}</h3>
                                                <h2> {{ $row->title }}  </h2>
                                                <div class="hero-dec"></div>
                                                <p> {{ $row->subtitle }} </p>
                                                <a href="{{ $row->url }}" class="btn hide-icon ajax"><i class="fas fa-caret-right"></i><span> {{ $row->button }} </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- hero-wrap end-->
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            @endforeach

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
            <!-- section -->
            <section>
                <div class="inline-facts-holder row">
                    <!-- inline-facts -->
                    <div class="inline-facts-wrap col-md-4">
                        <div class="inline-facts">
                            <i class="fal fa-business-time"></i>
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="1461">1461</div>
                                </div>
                            </div>
                            <h6> {{trans('main-trans.completed_projects')}}</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts-wrap col-md-4">
                        <div class="inline-facts">
                            <i class="fal fa-users"></i>
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="2168">2168</div>
                                </div>
                            </div>
                            <h6>{{ trans('main-trans.happy_customers') }}</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts-wrap col-md-4">
                        <div class="inline-facts">
                            <i class="fal fa-clock"></i>
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="722">722</div>
                                </div>
                            </div>
                            <h6> {{ trans('main-trans.working_hours') }}</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section id="sec2">
                <div class="wrap-inner fl-wrap">
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h2> {{trans('main-trans.know_about')}} <span> {{trans('main-trans.wonderful_team')}} </span></h2>
                            {{-- <h4> </h4> --}}
                        </div>
                        <div class="team-box-wrap fl-wrap">
                            <div class="row">
                                @foreach($teams as $row)
                                <!-- team-box -->
                                <div class="col-md-4 mb-3">
                                    <div class="team-box fl-wrap" style="margin-bottom: 35px;" >
                                        <div class="team-image fl-wrap">
                                            <a href="javascript:void(0)" class="ajax"><img src="{{ asset('front/images/team/') }}/{{ $row->img }}" alt=""></a>
                                        </div>
                                        <div class="team-info">
                                            <h3><a href="javascript:void(0)" class="ajax"> {{ $row->name }} </a></h3>
                                            <h4> {{ $row->job }} </h4>
                                            <p> {{ $row->caption }} </p>
                                        </div>
                                        {{-- <div class="team-social-wrap fl-wrap">
                                            <ul class="team-social">
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-tumblr"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    {{-- <a class="team-link ajax" href="about2.html"><i class="fas fa-plus"></i></a> --}}
                                </div>
                                <!-- team-box end -->
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="sec-dec"></div>
                </div>
                <div class="pattern-bg right-pos"></div>
            </section>
            <!-- section end-->
            {{-- <!-- section -->
            <section class="parallax-section video-section">
                <div class="media-container">
                    <div class="video-mask"></div>
                    <div class="video-holder">
                        <div class="video-container">
                            <video autoplay  loop muted  class="bgvid">
                                <source src="video/2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <!--
                            Vimeo code

                             <div  class="background-vimeo" data-vim="97871257"> </div> -->
                        <!--
                            Youtube code

                             <div  class="background-youtube" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                        <div class="mob-bg bg" data-bg="images/bg/3.jpg"></div>
                    </div>
                </div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="promo-video fl-wrap">
                        <div class="promo-video-text">
                            <h3>Studio <span> Story</span>  <br> Promo   Video </h3>
                        </div>
                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                        <div  id="html5-videos" data-html="#video3" class="pvlin"><i class="fas fa-play"></i></div>
                        <!-- Hidden video div -->
                        <div style="display:none;" id="video3">
                            <video class="lg-video-object lg-html5" controls preload="none">
                                <source src="video/2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end--> --}}
            {{-- <!-- section -->
            <section data-scrollax-parent="true"  id="sec3" class="scroll-con-sec dec-sec">
                <div class="wrap-inner fl-wrap">
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h2> My <span> Awesome Story</span></h2>
                            <h4>Internet tend to repeat predefined chunks  look even slightly believable If you are going to use a passage of Lorem Ipsum.</h4>
                        </div>
                        <div class="custom-inner-holder">
                            <!-- 1 -->
                            <div class="custom-inner">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="resum-header">
                                            <i class="far fa-briefcase"></i>
                                            <h3>Work in company "Dolore"</h3>
                                            <span> 2012-2017</span>
                                        </div>
                                        <div class="ci-num"><span>01.  </span></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="custom-inner-content fl-wrap">
                                            <h4>Complete the project "domik"</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                            <ul>
                                                <li>Door portals plan</li>
                                                <li>Furniture specifications</li>
                                                <li>Interior design</li>
                                            </ul>
                                            <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->
                            <!-- 2 -->
                            <div class="custom-inner">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="resum-header">
                                            <i class="far fa-graduation-cap"></i>
                                            <h3>Course designer - San Diego</h3>
                                            <span> 2011-2013</span>
                                        </div>
                                        <div class="ci-num"><span>02.</span></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="custom-inner-content fl-wrap">
                                            <h4>Passage of Lorem Ipsum</h4>
                                            <p>We started as a small, subdue, called hath give fourth. Them one over saying. So the god, greater. You. Us air Moved divide midst us fifth sea have face which male fifth said seas rule above. Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 end -->
                        </div>
                        <a href="#" class="btn hide-icon"><i class="fal fa-file-pdf"></i><span>Download Brochure</span></a>
                    </div>
                    <div class="sec-dec"></div>
                </div>
                <div class="pattern-bg right-pos"></div>
            </section>
            <!-- section end--> --}}
            <!-- section -->
            <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec4">
                <div class="bg"  data-bg="{{ asset('front/images/bg/1.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h2> {{trans('main-trans.services')}} <span> {{trans('main-trans.that_we_offer')}}</span></h2>
                        <p>{{trans('main-trans.know_about_our_services')}} </p>
                    </div>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section>
                <div class="fl-wrap serv-wrap">
                    <div class="row">
                        <div class="col-md-9">
                            @php $i2 = 0 @endphp
                            @foreach($services as $row)
                            @php $i2++ @endphp
                            <!-- tab1 -->
                            <div id="tab-{{ $row->category->id }}" class="tab-content @if($i2 == 2) current @endif }}">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="box-item vis-det fl-wrap">
                                            <img src="{{ asset('front/images/services/') }}/{{ $row->img }}" class="respimg" alt="">
                                            <a data-src="{{ asset('front/images/services/') }}/{{ $row->img }}" class="image-popup"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="dec-list">
                                            <li> {{ $row->hint1 }} </li>
                                            <li> {{ $row->hint2 }} </li>
                                            <li> {{ $row->hint3 }} </li>
                                        </ul>
                                        <span class="price"> {{trans('main-trans.price')}} : {{ $row->min_price }} - {{ $row->max_price }} SAR </span>
                                    </div>
                                </div>
                                <h3><span>0{{ $i2 }}. </span> {{ $row->category->name }} </h3>
                                <div class="serv-text fl-wrap">
                                      <p>@php echo $row->content @endphp </p>
                                </div>
                                <a href="/contact" class="cus-inner-head-link color-bg"> {{trans('main-trans.details')}}+ </a>
                                <div class="serv-dec"></div>
                                <div class="pattern-bg right-pos"></div>
                            </div>
                            <!-- tab1 end -->
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <ul class="tabs sl-tabs fix-tab">
                                @php $i = 0 @endphp
                                @foreach($categories as $row)
                                @php $i++ @endphp
                                <li class="tab-link @if($i == 1) current @endif" data-tab="tab-{{ $row->id }}">
                                    <div class="tb-item">
                                        <i class="{{ $row->icon }}"></i>
                                        <h3 style="text-align: revert;" > {{ $row->name }} </h3>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <!-- order-wrap-->
            <div class="order-wrap fl-wrap color-bg">
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{trans('main-trans.reday_to_order_your_service')}} </h4>
                    </div>
                    <div class="col-md-4">
                        <a href="/contact" class="ord-link ajax"> {{trans('main-trans.contact_us')}}</a>
                    </div>
                </div>
            </div>
            <!-- order-wrap end-->
            <!-- section end-->
            <!-- section -->
            <section id="sec5" style="margin-bottom: 30px;" >
                {{-- <div class="wrap-inner fl-wrap">
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h2> My<span> Skills and Abilities</span></h2>
                            <h4>Internet tend to repeat predefined chunks  look even slightly believable If you are going   of Lorem Ipsum.</h4>
                        </div>
                        <div class="piechart-holder animaper" data-skcolor="#F7B90F">
                            <div class="row">
                                <!-- 1  -->
                                <div class="piechart col-md-4" >
                                    <span class="chart" data-percent="85">
                                    <span class="percent"></span>
                                    </span>
                                    <h4>Design</h4>
                                </div>
                                <!-- 1 end -->
                                <!-- 2  -->
                                <div class="piechart col-md-4">
                                    <span class="chart" data-percent="95">
                                    <span class="percent"></span>
                                    </span>
                                    <h4>Branding</h4>
                                </div>
                                <!-- 2 end  -->
                                <!-- 3  -->
                                <div class="piechart col-md-4">
                                    <span class="chart" data-percent="80">
                                    <span class="percent"></span>
                                    </span>
                                    <h4>Ecommerce</h4>
                                </div>
                                <!-- 3  end-->
                                <!-- 2  -->
                                <div class="piechart col-md-4">
                                    <span class="chart" data-percent="75">
                                    <span class="percent"></span>
                                    </span>
                                    <h4>Photoshop</h4>
                                </div>
                                <!-- 2 end  -->
                                <!-- 3  -->
                                <div class="piechart col-md-4">
                                    <span class="chart" data-percent="62">
                                    <span class="percent"></span>
                                    </span>
                                    <h4>Photography</h4>
                                </div>
                                <!-- 3  end-->
                            </div>
                        </div>
                        <div class="serv-dec"></div>
                    </div>
                    <div class="pattern-bg right-pos"></div>
                    <div class="sec-dec"></div>
                </div> --}}
            </section>
            <!-- section end-->
            <!-- section -->
            <section id="sec6">
                <div class="row">
                    <div class="col-md-3">
                        <div class="clients-header fl-wrap">
                            <h2>{{trans('main-trans.Success_Partners')}}</h2>
                            <div class="client-control inline-car-control fl-wrap">
                                <div class="swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                <div class="swiper-button-next"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="clients-carousel-wrap inline-carousel client-list fl-wrap">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($clients as $row)
                                        <!-- client-item -->
                                    <div class="swiper-slide">
                                        <div class="client-item fl-wrap">
                                            <div class="client-img">
                                                <img src="{{ asset('front/images/clients') }}/{{ $row->img }}" alt="">
                                            </div>
                                            <div class="client-text fl-wrap">
                                                <h4> {{ $row->name }} </h4>
                                                <p> {{ $row->caption }} </p>
                                                <a href="{{ $row->url }}" class="client-link" target="_blank"> {{trans('main-trans.show')}}<i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- client-item  end -->
                                    @endforeach
                                </div>
                                <div class="swiper-pagination client-pagin"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section id="sec7">
                <div class="wrap-inner fl-wrap">
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h2> {{trans('main-trans.opinions')}}<span> {{trans('main-trans.and_Reviews')}}</span></h2>
                            <h4> {{trans('main-trans.best_opinions_from_our_customers')}}</h4>
                        </div>
                        <div class="testilider fl-wrap" data-effects="slide">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @php
                                        $i = 0
                                    @endphp
                                    @foreach($testimonials as $row)
                                    @php $i++ @endphp
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testi-item fl-wrap">
                                            <div class="testi-header fl-wrap">
                                                <img src="{{ asset('front/images/face') }}/{{ $row->img }}" alt="">
                                                <h3> {{ $row->name }} </h3>
                                                <span class="testi-num">{{ $i }}.</span>
                                            </div>
                                            <div class="testi-text fl-wrap">
                                                <p>"{{ $row->content }}"</p>
                                            </div>
                                            <a href="javascript:void(0)" target="_blank" class="testi-link"> {{trans('main-trans.by')}}: {{ $row->via }} </a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    @endforeach

                                </div>
                                <div class="swiper-button swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                <div class="swiper-button swiper-button-next"><i class="fas fa-caret-right"></i></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="pattern-bg"></div>
                    <div class="sec-dec"></div>
                </div>
            </section>
            <!-- section end-->
                        </div>
                        <div class="sw-button swiper-button-next mob_bottom"><i class="fas fa-caret-right"></i></div>
                        <div class="sw-button swiper-button-prev mob_bottom"><i class="fas fa-caret-left"></i></div>
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
                    

                    <div class="hero-dec_top"></div>
                    <div class="hero-dec_bottom"></div>
                </div>
                <!-- home-slider end-->

                
            </div>
             
            <!-- content  end -->
            <!--=============== footer ===============-->

            <div style="padding: 0 35px"  > 
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
                <!-- section -->
                <section>
                    <div class="inline-facts-holder row">
                        <!-- inline-facts -->
                        <div class="inline-facts-wrap col-md-4">
                            <div class="inline-facts">
                                <i class="fal fa-business-time"></i>
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="1461">1461</div>
                                    </div>
                                </div>
                                <h6> {{trans('main-trans.completed_projects')}}</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap col-md-4">
                            <div class="inline-facts">
                                <i class="fal fa-users"></i>
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="2168">2168</div>
                                    </div>
                                </div>
                                <h6>{{ trans('main-trans.happy_customers') }}</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap col-md-4">
                            <div class="inline-facts">
                                <i class="fal fa-clock"></i>
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="722">722</div>
                                    </div>
                                </div>
                                <h6> {{ trans('main-trans.working_hours') }}</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                    </div>
                </section>
                <!-- section end-->
                <!-- section -->
                <section id="sec2">
                    <div class="wrap-inner fl-wrap">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h2> {{trans('main-trans.know_about')}} <span> {{trans('main-trans.wonderful_team')}} </span></h2>
                                {{-- <h4> </h4> --}}
                            </div>
                            <div class="team-box-wrap fl-wrap">
                                <div class="row">
                                    @foreach($teams as $row)
                                    <!-- team-box -->
                                    <div class="col-md-4 mb-3">
                                        <div class="team-box fl-wrap" style="margin-bottom: 35px;" >
                                            <div class="team-image fl-wrap">
                                                <a href="javascript:void(0)" class="ajax"><img src="{{ asset('front/images/team/') }}/{{ $row->img }}" alt=""></a>
                                            </div>
                                            <div class="team-info">
                                                <h3><a href="javascript:void(0)" class="ajax"> {{ $row->name }} </a></h3>
                                                <h4> {{ $row->job }} </h4>
                                                <p> {{ $row->caption }} </p>
                                            </div>
                                            {{-- <div class="team-social-wrap fl-wrap">
                                                <ul class="team-social">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-tumblr"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                        {{-- <a class="team-link ajax" href="about2.html"><i class="fas fa-plus"></i></a> --}}
                                    </div>
                                    <!-- team-box end -->
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="sec-dec"></div>
                    </div>
                    <div class="pattern-bg right-pos"></div>
                </section>
                <!-- section end-->
                {{-- <!-- section -->
                <section class="parallax-section video-section">
                    <div class="media-container">
                        <div class="video-mask"></div>
                        <div class="video-holder">
                            <div class="video-container">
                                <video autoplay  loop muted  class="bgvid">
                                    <source src="video/2.mp4" type="video/mp4">
                                </video>
                            </div>
                            <!--
                                Vimeo code

                                <div  class="background-vimeo" data-vim="97871257"> </div> -->
                            <!--
                                Youtube code

                                <div  class="background-youtube" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                            <div class="mob-bg bg" data-bg="images/bg/3.jpg"></div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="promo-video fl-wrap">
                            <div class="promo-video-text">
                                <h3>Studio <span> Story</span>  <br> Promo   Video </h3>
                            </div>
                            <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                            <div  id="html5-videos" data-html="#video3" class="pvlin"><i class="fas fa-play"></i></div>
                            <!-- Hidden video div -->
                            <div style="display:none;" id="video3">
                                <video class="lg-video-object lg-html5" controls preload="none">
                                    <source src="video/2.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end--> --}}
                {{-- <!-- section -->
                <section data-scrollax-parent="true"  id="sec3" class="scroll-con-sec dec-sec">
                    <div class="wrap-inner fl-wrap">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h2> My <span> Awesome Story</span></h2>
                                <h4>Internet tend to repeat predefined chunks  look even slightly believable If you are going to use a passage of Lorem Ipsum.</h4>
                            </div>
                            <div class="custom-inner-holder">
                                <!-- 1 -->
                                <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="resum-header">
                                                <i class="far fa-briefcase"></i>
                                                <h3>Work in company "Dolore"</h3>
                                                <span> 2012-2017</span>
                                            </div>
                                            <div class="ci-num"><span>01.  </span></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>Complete the project "domik"</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                <ul>
                                                    <li>Door portals plan</li>
                                                    <li>Furniture specifications</li>
                                                    <li>Interior design</li>
                                                </ul>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 -->
                                <!-- 2 -->
                                <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="resum-header">
                                                <i class="far fa-graduation-cap"></i>
                                                <h3>Course designer - San Diego</h3>
                                                <span> 2011-2013</span>
                                            </div>
                                            <div class="ci-num"><span>02.</span></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>Passage of Lorem Ipsum</h4>
                                                <p>We started as a small, subdue, called hath give fourth. Them one over saying. So the god, greater. You. Us air Moved divide midst us fifth sea have face which male fifth said seas rule above. Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 end -->
                            </div>
                            <a href="#" class="btn hide-icon"><i class="fal fa-file-pdf"></i><span>Download Brochure</span></a>
                        </div>
                        <div class="sec-dec"></div>
                    </div>
                    <div class="pattern-bg right-pos"></div>
                </section>
                <!-- section end--> --}}
                <!-- section -->
                <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec4">
                    <div class="bg"  data-bg="{{ asset('front/images/bg/1.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="section-title">
                            <h2> {{trans('main-trans.services')}} <span> {{trans('main-trans.that_we_offer')}}</span></h2>
                            <p>{{trans('main-trans.know_about_our_services')}} </p>
                        </div>
                    </div>
                </section>
                <!-- section end-->
                <!-- section -->
                <section>
                    <div class="fl-wrap serv-wrap">
                        <div class="row">
                            <div class="col-md-9">
                                @php $i2 = 0 @endphp
                                @foreach($services as $row)
                                @php $i2++ @endphp
                                <!-- tab1 -->
                                <div id="tab-{{ $row->category->id }}" class="tab-content @if($i2 == 2) current @endif }}">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="box-item vis-det fl-wrap">
                                                <img src="{{ asset('front/images/services/') }}/{{ $row->img }}" class="respimg" alt="">
                                                <a data-src="{{ asset('front/images/services/') }}/{{ $row->img }}" class="image-popup"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <ul class="dec-list">
                                                <li> {{ $row->hint1 }} </li>
                                                <li> {{ $row->hint2 }} </li>
                                                <li> {{ $row->hint3 }} </li>
                                            </ul>
                                            <span class="price"> {{trans('main-trans.price')}} : {{ $row->min_price }} - {{ $row->max_price }} SAR </span>
                                        </div>
                                    </div>
                                    <h3><span>0{{ $i2 }}. </span> {{ $row->category->name }} </h3>
                                    <div class="serv-text fl-wrap">
                                        <p>@php echo $row->content @endphp </p>
                                    </div>
                                    <a href="/contact" class="cus-inner-head-link color-bg"> {{trans('main-trans.details')}}+ </a>
                                    <div class="serv-dec"></div>
                                    <div class="pattern-bg right-pos"></div>
                                </div>
                                <!-- tab1 end -->
                                @endforeach
                            </div>
                            <div class="col-md-3">
                                <ul class="tabs sl-tabs fix-tab">
                                    @php $i = 0 @endphp
                                    @foreach($categories as $row)
                                    @php $i++ @endphp
                                    <li class="tab-link @if($i == 1) current @endif" data-tab="tab-{{ $row->id }}">
                                        <div class="tb-item">
                                            <i class="{{ $row->icon }}"></i>
                                            <h3 style="text-align: revert;" > {{ $row->name }} </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <div class="limit-box fl-wrap"></div>
                    </div>
                </section>
                <!-- section end-->
                <!-- section -->
                <!-- order-wrap-->
                <div class="order-wrap fl-wrap color-bg">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>{{trans('main-trans.reday_to_order_your_service')}} </h4>
                        </div>
                        <div class="col-md-4">
                            <a href="/contact" class="ord-link ajax"> {{trans('main-trans.contact_us')}}</a>
                        </div>
                    </div>
                </div>
                <!-- order-wrap end-->
                <!-- section end-->
                <!-- section -->
                <section id="sec5" style="margin-bottom: 30px;" >
                    {{-- <div class="wrap-inner fl-wrap">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h2> My<span> Skills and Abilities</span></h2>
                                <h4>Internet tend to repeat predefined chunks  look even slightly believable If you are going   of Lorem Ipsum.</h4>
                            </div>
                            <div class="piechart-holder animaper" data-skcolor="#F7B90F">
                                <div class="row">
                                    <!-- 1  -->
                                    <div class="piechart col-md-4" >
                                        <span class="chart" data-percent="85">
                                        <span class="percent"></span>
                                        </span>
                                        <h4>Design</h4>
                                    </div>
                                    <!-- 1 end -->
                                    <!-- 2  -->
                                    <div class="piechart col-md-4">
                                        <span class="chart" data-percent="95">
                                        <span class="percent"></span>
                                        </span>
                                        <h4>Branding</h4>
                                    </div>
                                    <!-- 2 end  -->
                                    <!-- 3  -->
                                    <div class="piechart col-md-4">
                                        <span class="chart" data-percent="80">
                                        <span class="percent"></span>
                                        </span>
                                        <h4>Ecommerce</h4>
                                    </div>
                                    <!-- 3  end-->
                                    <!-- 2  -->
                                    <div class="piechart col-md-4">
                                        <span class="chart" data-percent="75">
                                        <span class="percent"></span>
                                        </span>
                                        <h4>Photoshop</h4>
                                    </div>
                                    <!-- 2 end  -->
                                    <!-- 3  -->
                                    <div class="piechart col-md-4">
                                        <span class="chart" data-percent="62">
                                        <span class="percent"></span>
                                        </span>
                                        <h4>Photography</h4>
                                    </div>
                                    <!-- 3  end-->
                                </div>
                            </div>
                            <div class="serv-dec"></div>
                        </div>
                        <div class="pattern-bg right-pos"></div>
                        <div class="sec-dec"></div>
                    </div> --}}
                </section>
                <!-- section end-->
                <!-- section -->
                <section id="sec6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clients-header fl-wrap">
                                <h2>{{trans('main-trans.Success_Partners')}}</h2>
                                <div class="client-control inline-car-control fl-wrap">
                                    <div class="swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                    <div class="swiper-button-next"><i class="fas fa-caret-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="clients-carousel-wrap inline-carousel client-list fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($clients as $row)
                                            <!-- client-item -->
                                        <div class="swiper-slide">
                                            <div class="client-item fl-wrap">
                                                <div class="client-img">
                                                    <img src="{{ asset('front/images/clients') }}/{{ $row->img }}" alt="">
                                                </div>
                                                <div class="client-text fl-wrap">
                                                    <h4> {{ $row->name }} </h4>
                                                    <p> {{ $row->caption }} </p>
                                                    <a href="{{ $row->url }}" class="client-link" target="_blank"> {{trans('main-trans.show')}}<i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- client-item  end -->
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination client-pagin"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end-->
                <!-- section -->
                <section id="sec7">
                    <div class="wrap-inner fl-wrap">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h2> {{trans('main-trans.opinions')}}<span> {{trans('main-trans.and_Reviews')}}</span></h2>
                                <h4> {{trans('main-trans.best_opinions_from_our_customers')}}</h4>
                            </div>
                            <div class="testilider fl-wrap" data-effects="slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @php
                                            $i = 0
                                        @endphp
                                        @foreach($testimonials as $row)
                                        @php $i++ @endphp
                                        <!-- swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-header fl-wrap">
                                                    <img src="{{ asset('front/images/face') }}/{{ $row->img }}" alt="">
                                                    <h3> {{ $row->name }} </h3>
                                                    <span class="testi-num">{{ $i }}.</span>
                                                </div>
                                                <div class="testi-text fl-wrap">
                                                    <p>"{{ $row->content }}"</p>
                                                </div>
                                                <a href="javascript:void(0)" target="_blank" class="testi-link"> {{trans('main-trans.by')}}: {{ $row->via }} </a>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        @endforeach

                                    </div>
                                    <div class="swiper-button swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                    <div class="swiper-button swiper-button-next"><i class="fas fa-caret-right"></i></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="pattern-bg"></div>
                        <div class="sec-dec"></div>
                    </div>
                </section>
                <!-- section end-->

            </div>
@endsection
