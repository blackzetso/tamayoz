@extends('front.layout.app')
@section('content')
    @include('front.layout.nav')
    @include('front.layout.aside')
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder" data-pagetitle="Contacts">
                    <!--Content -->
                    <div class="content">
                        <div class="column-content">
                            <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec1">
                                <div class="bg"  data-bg="{{ asset('front/images/bg/1.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                                <div class="overlay"></div>
                                <div class="container">
                                    <div class="section-title">
                                        <h2>{{trans('main-trans.contact')}}<span>{{trans('main-trans.us')}}</span></h2>
                                        <p>{{trans('main-trans.Do_not_hesitate_to_ask')}} </p>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="contact-detail-wrap fl-wrap">
                                    <div class="row">
                                        <!-- contact-detail -->
                                        <div class="col-md-4">
                                            <div class="contact-detail fl-wrap">
                                                <i class="fal fa-phone-rotary"></i>
                                                <h3> {{trans('main-trans.phone')}}</h3>
                                                 <ul>
                                                    <li><a href="tel:{{ $contact->phone }}"> {{ $contact->phone }} </a></li>
                                                </ul>
                                                <span class="card-item_num">01.</span>
                                            </div>
                                        </div>
                                        <!-- contact-detail end -->
                                        <!-- contact-detail -->
                                        <div class="col-md-4">
                                            <div class="contact-detail fl-wrap">
                                                <i class="fal fa-envelope"></i>
                                                <h3>{{trans('main-trans.Email')}}</h3>
                                                 <ul>
                                                    <li><a href="#"> {{ $contact->email }} </a></li>
                                                </ul>
                                                <span class="card-item_num">02.</span>
                                            </div>
                                        </div>
                                        <!-- contact-detail end -->
                                        <!-- contact-detail -->
                                        <div class="col-md-4">
                                            <div class="contact-detail fl-wrap">
                                                <i class="fal fa-map-marked"></i>
                                                <h3>{{trans('main-trans.Our_Location')}}</h3>
                                                 <ul>
                                                    <li><a href="#"> {{ $contact->adress }} </a></li>
                                                </ul>
                                                <span class="card-item_num">03.</span>
                                            </div>
                                        </div>
                                        <!-- contact-detail end -->
                                    </div>
                                </div>
                            </section>
                            <div class="map-box  fl-wrap">
                                <div class="map-container mc_big">
                                    <div id="map-single" class="map" data-latlog="[{{ $contact->lat }} , {{ $contact->long }}]" data-popuptext="نحن نعمل في المملكه العربيه السعودية . <br> نحن في انتظار زيارتك"></div>
                                </div>
                            </div>
                            <section>
                                <div class="wrap-inner fl-wrap">
                                    <div class="container">
                                        <div class="section-title fl-wrap">
                                            <h2> {{trans('main-trans.be_in_touch')}} <span> {{trans('main-trans.us')}}</span></h2>
                                            <h4>  {{trans('main-trans.Do_not_hesitate_to_contact_us')}}</h4>
                                        </div>
                                        <div class="fl-wrap">
                                            <!-- contact form -->
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                    <div class="input-wrap"><i class="fal fa-user-plus"></i><input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name" ></div>
                                                    <div class="input-wrap"><i class="fal fa-envelope"></i><input name="email" type="text" id="email" onClick="this.select()" value="E-mail" ></div>
                                                    <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                    <button type="submit"  id="submit"  class="btn hide-icon"  ><i class="fas fa-caret-right"></i><span>Send Message </span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pattern-bg right-pos"></div>
                                    <div class="sec-dec"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- content  end -->
                    <!--=============== footer ===============-->
@endsection
