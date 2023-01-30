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
                     <div class="scroll-nav-wrap">
                        <nav class="scroll-nav">
                            <ul>
                                <li><a class="scroll-link act-link" href="#sec1"><span> {{ trans('main-trans.about') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec2"><span> {{ trans('main-trans.team') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec4"><span> {{ trans('main-trans.services') }} </span></a></li>
                                 <li><a class="scroll-link" href="#sec5"><span>Skills</span></a></li>
                                 <li><a class="scroll-link" href="#sec6"><span> {{ trans('main-trans.partners') }} </span></a></li>
                                <li><a class="scroll-link" href="#sec7"><span> {{ trans('main-trans.testimonials') }} </span></a></li>
                            </ul>
                        </nav>
                    </div>
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
                                    <h6> مشاريع مكتملة</h6>
                                    <span class="dec-counter">1461</span></div>
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
                                    <h6>عملاء سعداء</h6>
                                    <span class="dec-counter">2168</span></div>
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
                                    <h6> ساعات عمل</h6>
                                    <span class="dec-counter">722</span></div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </section>
                    <section id="sec2">
                        <div class="wrap-inner fl-wrap">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h2> اعرف عن <span> فريقنا الرائع </span></h2>

                                </div>
                                <div class="team-box-wrap fl-wrap">
                                    <div class="row">
                                        <!-- team-box -->
                                        <div class="col-md-4 mb-3">
                                            <div class="team-box fl-wrap" style="margin-bottom: 35px;">
                                                <div class="team-image fl-wrap">
                                                    <a href="javascript:void(0)" class="ajax"><img src="http://tamayyoz.net/front/images/team/1673424845_30148.jpg" alt=""></a>
                                                </div>
                                                <div class="team-info">
                                                    <h3><a href="javascript:void(0)" class="ajax"> حازم محمود محمد </a></h3>
                                                    <h4> Social Media Specialist </h4>
                                                    <p> شسيبسبشخس </p>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- team-box end -->

                                    </div>
                                </div>
                            </div>
                            <div class="sec-dec"></div>
                        </div>
                        <div class="pattern-bg right-pos"></div>
                    </section>
                    <section class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec4">
                        <div class="bg" data-bg="http://tamayyoz.net/front/images/bg/1.jpg" data-scrollax="properties: { translateY: '150px' }" style="background-image: url(&quot;http://tamayyoz.net/front/images/bg/1.jpg&quot;); transform: translateZ(0px) translateY(-35.1375px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2> خدماتنا <span> التي نقدمها</span></h2>
                                <p>إعرف عن خدماتنا </p>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="fl-wrap serv-wrap">
                            <div class="row">
                                <div class="col-md-9">
                                        @foreach($services as $service)
                                            <div id="tab-{{$service->category_id}}" class="tab-content  }}">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="box-item vis-det fl-wrap">
                                                            <img src="./front/images/services/{{ $service->img }}" class="respimg" alt="">
                                                            <a data-src="./front/images/services/{{ $service->img }}" class="image-popup"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <ul class="dec-list">
                                                            <li> {{$service->hint1}} </li>
                                                            <li> {{$service->hint2}} </li>
                                                            <li> {{$service->hint3}} </li>
                                                        </ul>
                                                        <span class="price"> {{$service->min_price}} </span>
                                                    </div>
                                                </div>
                                                <h3><span>01. </span> التصميم التعليمي </h3>
                                                <div class="serv-text fl-wrap">
                                                    <p></p><p>يتوقع في نهاية البرنامج أن يكون المتدرب قادرا على أن:</p>

                                                    <ul>
                                                        <li>معرفة عامة عن أهم نظريات التعلم.</li>
                                                        <li>تحديد الاحتياجات التدريبية.</li>
                                                        <li>تصمم أهداف تدريبية وفق تصنيف بلوم.</li>
                                                        <li>تجميع المادة التدريبية من مصادرها المختلفة.</li>
                                                        <li>التميز بين التعلم السريع والتعلم التقليدي.</li>
                                                        <li>تصمم دورة تدريبية وفق دائرة التعلم بشكل سريع.</li>
                                                    </ul>

                                                    <h3>&nbsp;</h3>

                                                    <p>&nbsp;
                                                    </p><h2>مكونات الحقيبة التدريبية</h2>
                                                    <p></p>

                                                    <p><strong>١ -&nbsp;بطاقة البرنامج</strong></p>

                                                    <p><strong>٢ -&nbsp;دليل مدرب</strong></p>

                                                    <p><strong>٣ - دليل المتدرب</strong></p>

                                                    <p><strong>٤ - بوربوينت (عرض تقديمي)</strong></p>

                                                    <p><strong>٥ - ملف الانشطة التدريبية</strong></p>

                                                    <p><strong>٦ - ملف العاب تدريبية</strong></p>

                                                    <p><strong>٧ - ملف الأنشطة الإضافية</strong></p>

                                                    <p><strong>٨ - ملف خرائط ذهنية للدورة</strong></p>

                                                    <p><strong>٩ - المشروع التطبيقي</strong></p>

                                                    <p><strong>١٠ - دليل الفيديوهات</strong></p>

                                                    <p><strong>١١ - المادة الإثرائية</strong></p>

                                                    <p><strong>١٢ - خارطة تدفق البرنامج (من الوصف حتى المخرجات)</strong></p>

                                                    <p><strong>١٣ - خطة وأدوات التقييم</strong></p> <p></p>
                                                </div>
                                                <a href="/contact" class="cus-inner-head-link color-bg"> تفاصيل+ </a>
                                                <div class="serv-dec"></div>
                                                <div class="pattern-bg right-pos"></div>
                                            </div>
                                        @endforeach
                                </div>
                                <div class="col-md-3">
                                    <ul class="tabs sl-tabs fix-tab scroll-to-fixed-fixed" style="z-index: 112; position: fixed; top: 170px; margin-left: 0px; width: 247.512px; left: 862.538px;">

                                        @foreach($categories as $categorie)
                                            <li class="tab-link " data-tab="tab-{{$categorie->id}}">
                                                <div class="tb-item">
                                                    <i class="{{$categorie->icon}}"></i>
                                                    <h3> {{$categorie->name}} </h3>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul><div style="display: block; width: 247.512px; height: 438px; float: left;"></div>
                                </div>

                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <div class="order-wrap fl-wrap color-bg">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>جاهز لطلب خدمتك ؟ </h4>
                            </div>
                            <div class="col-md-4">
                                <a href="/contact" class="ord-link ajax"> تواصل معنا</a>
                            </div>
                        </div>
                    </div>
                    <section id="sec5" style="margin-bottom: 30px;">

                    </section>
                    <section id="sec6">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="clients-header fl-wrap">
                                    <h2>شركاء النجاح</h2>
                                    <div class="client-control inline-car-control fl-wrap">
                                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-caret-left"></i></div>
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-caret-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="clients-carousel-wrap inline-carousel client-list fl-wrap">
                                    <div class="swiper-container swiper-container-horizontal">
                                        <div class="swiper-wrapper" style="transform: translate3d(-542px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673424974_93083.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> مركز الاسكندرية للإستشارات </h4>
                                                        <p> شسيبسيشبشس </p>
                                                        <a href="https://www.facebook.com/Tamayyoz.TID" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673425799_54683.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> جامعة الفيوم </h4>
                                                        <p> بسنتنتلبستلبستهخبستهس </p>
                                                        <a href="https://www.facebook.com/Kindergarten.courses/" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- client-item -->
                                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673424974_93083.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> مركز الاسكندرية للإستشارات </h4>
                                                        <p> شسيبسيشبشس </p>
                                                        <a href="https://www.facebook.com/Tamayyoz.TID" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- client-item  end -->
                                            <!-- client-item -->
                                            <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673425799_54683.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> جامعة الفيوم </h4>
                                                        <p> بسنتنتلبستلبستهخبستهس </p>
                                                        <a href="https://www.facebook.com/Kindergarten.courses/" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- client-item  end -->
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673424974_93083.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> مركز الاسكندرية للإستشارات </h4>
                                                        <p> شسيبسيشبشس </p>
                                                        <a href="https://www.facebook.com/Tamayyoz.TID" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 261px; margin-right: 10px;">
                                                <div class="client-item fl-wrap">
                                                    <div class="client-img">
                                                        <img src="http://tamayyoz.net/front/images/clients/1673425799_54683.jpg" alt="">
                                                    </div>
                                                    <div class="client-text fl-wrap">
                                                        <h4> جامعة الفيوم </h4>
                                                        <p> بسنتنتلبستلبستهخبستهس </p>
                                                        <a href="https://www.facebook.com/Kindergarten.courses/" class="client-link" target="_blank"> عرض<i class="fas fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="swiper-pagination client-pagin swiper-pagination-fraction swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="sec7">
                        <div class="wrap-inner fl-wrap">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h2> الآراء<span> والمراجعات</span></h2>
                                    <h4> فيما يلي بعض أفضل الآراء التي نعتز بها من عملائنا</h4>
                                </div>
                                <div class="testilider fl-wrap" data-effects="slide">
                                    <div class="swiper-container swiper-container-horizontal" style="cursor: grab;">
                                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                                        </div>
                                        <div class="swiper-button swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-caret-left"></i></div>
                                        <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-caret-right"></i></div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">0</span></div>
                                </div>
                            </div>
                            <div class="pattern-bg"></div>
                            <div class="sec-dec"></div>
                        </div>
                    </section>

                </div>
                <!-- column wrap end-->
            </div>
            <!-- content  end -->
@endsection
