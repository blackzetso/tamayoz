@extends('front.layout.app')
@section('content')
    @include('front.layout.nav')
    @include('front.layout.aside')
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder" data-pagetitle="الدورات والتدريب">
                    <!--Content -->
                    <div class="content">
                        <div class="column-content">
                            <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec1">
                                <div class="bg"  data-bg="{{ asset('front/images/bg/1.jpg') }}" data-scrollax="properties: { translateY: '150px' }" ></div>
                                <div class="overlay"></div>
                                <div class="container">
                                    <div class="section-title">
                                        <h2>{{trans('main-trans.enroll_training')}} </h2>
                                        <p> {{trans('main-trans.enroll_and_we_will_contact_with_you')}}</p>
                                    </div>
                                </div>
                            </section>
                            
                            
                            <section>
                                <div class="wrap-inner fl-wrap">
                                    <div class="container">
                                        <div class="section-title fl-wrap">
                                            <h2> {{trans('main-trans.enroll_training')}} </h2>
                                            <h4>  {{trans('main-trans.enroll_and_we_will_contact_with_you')}}</h4>
                                        </div>
                                        <div class="fl-wrap">
                                            <!-- contact form -->
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form method="post"  id="contact-form" >
                                                    @csrf
                                                    <div class="input-wrap">
                                                        <i class="fal fa-user-plus"></i>
                                                        <input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="{{ trans('main-trans.full_name') }}" >
                                                    </div>
                                                    <div class="input-wrap">
                                                        <i class="fas fa-phone"></i>
                                                        <input name="phone" type="text" id="phone" onClick="this.select()" value="{{ trans('main-trans.phone') }}" >
                                                    </div>
                                                    <div class="input-wrap">
                                                        <i class="fas fa-code"></i>
                                                        <select class="form-control" name="course" >
                                                            <option value="دبلومه الفرونت إند">دبلومه الفرونت إند</option>
                                                            <option value="دبلومه الباك إند">دبلومه الباك إند</option> 
                                                        </select>
                                                    </div>
                                                    <div class="input-wrap">
                                                        <i class="fas fa-building"></i>
                                                        <select class="form-control" name="branch" >
                                                            <option value="فرع مدينة نصر">  فرع مدينه نصر </option>
                                                            <option value="فرع الدقى">  فرع الدقى </option>
                                                        </select>
                                                    </div>
                                                     
                                                    <button type="submit"  id="submit" class="btn"  > 
                                                        <span style="padding: 14px 20px">  enroll </span>
                                                    </button>

                                                    <div class="input-wrap" id="Result"></div>
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
@section('script')
    <script>
          $(document).on('submit','#contact-form',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('trainings.store') }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i style="font-size: 14px;background: unset;padding: unset;position: unset;" class="fas fa-sync fa-spin"></i>');
                    Form.find("button[type='submit']").attr('disabled','true');
                },
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    $("#Result").html(data);
                    $('.fa-sync').remove();
                    $('#addModal').modal('hide');
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });
    </script>
@endsection
