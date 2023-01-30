@extends('front.layout.app')

@section('content')
<!--================= main start ================-->
    @include('front.layout.nav')
    @include('front.layout.aside')
    <!--=============== wrapper ===============-->
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!--=============== content-holder ===============-->
        <div class="content-holder" data-pagetitle="Portfolio Boxed Grid 2">
            <!--Content -->
            <div class="content">
                <div class="column-content">
                    <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg" data-bg="{{ asset('front/images/bg/7.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2>{{trans('main-trans.Our')}} <span>{{trans('main-trans.Portfolio')}}</span></h2>
                                <p>Suspendisse viverra pretium neque ut tempus. Aenean et nulla non felis elementum.</p>
                            </div>
                        </div>
                    </section>
                    <!--Filter    -->
                    <div class="filter-wrap inline-filter boxed-filter fix-box">
                        <div class="mob-filter_btn"><i class="fas fa-filter"></i> Filters</div>
                        <div class="gallery-filters gfm">
                            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All projects</a>
                            @foreach($categories as $row)
                            <a href="javascipt:void(0)" class="gallery-filter" data-filter=".category-{{ $row->id }}">{{ $row->name }}</a>
                            @endforeach
                        </div>
                        <div class="folio-counter">
                            <div class="num-album"></div>
                            <span></span>
                            <div class="all-album"></div>
                            <i class="fal fa-list"></i>
                        </div>
                    </div>
                    <!--Filter  end    -->
                    <section>
                        <div class="wrap-inner fl-wrap">
                            <div class="container">
                                <!-- portfolio start -->
                                <div class="gallery-items hid-port-info spad tw-colomns">

                                    @foreach($portfolios as $row)
                                    <!-- gallery-item-->
                                    <div class="gallery-item photography category-{{ $row->id }}">
                                        <div class="grid-item-holder">
                                            <div class="box-item vis-det folio-img fl-wrap">
                                                <a href="/portfolios/{{ $row->id }}" >
                                                    <img  src="./front/images/folio/{{ $row->img }}" alt="">
                                                </a>
                                            </div>
                                            <a href="/portfolios/{{ $row->id }}">
                                                <div class="grid-det fl-wrap">
                                                    <h3><a href="/portfolios/{{ $row->id }}" class="ajax">{{ $row->title }}</a></h3>
                                                    <span>{{ $row->category->name }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    @endforeach
                                </div>
                                <!-- portfolio end-->
                            </div>
                        </div>
                    </section>
                    <div class="order-wrap fl-wrap color-bg single-wrap">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>{{trans('main-trans.Ready_to_order_your_project')}} </h4>
                            </div>
                            <div class="col-md-4">
                                <a href="contact.html" class="ord-link ajax">{{trans('main-trans.Get_In_Touch')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content  end -->
            <!--=============== footer ===============-->

@endsection
