@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item active"><a href="/admin/1/about"> إعدادات الموقع </a></li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> إعدادات الموقع </h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-right" dir="rtl" >
                                <div class="col-12 col-sm-12 col-md-4">
                                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true"> شعار الموقع </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false"> معلومات الموقع </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false"> الصورة الشخصية </a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <div class="tab-content border p-3" id="myTab3Content">
                                        <div class="tab-pane fade show active p-0" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                            <div class="row mb-3" dir="rtl" >
                                                <div class="col-4 text-right"></div>
                                                <div class="col-4" >
                                                    <img src="{{ asset('front/images/') }}/@php if($setting->logo == null){ echo 'logo.png'; }else{ echo $setting->logo; } @endphp" style="width: 100%;" >
                                                </div>
                                            </div>
                                            <div class="row" dir="ltr" >
                                                <div class="col-12" >
                                                    <form id="logoForm" class="form-horizontal" enctype="multipart/form-data" >
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group file color row"   >
                                                            <label class="col-md-12 col-form-label text-right mb-3"> الصورة </label>
                                                            <div class="col-md-12">
                                                                <input type="file" name="img" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary"> حفظ </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-0" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                            <form id="editForm"  method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group text-right row" dir="rtl" >
                                                    <label class="col-md-4 col-form-label"> كلمة المرور الحالية </label>
                                                    <div class="col-md-8">
                                                        <input type="password" name="current_pass" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group text-right row" dir="rtl" >
                                                    <label class="col-md-4 col-form-label" for="example-email"> كلمة المرور الجديده  </label>
                                                    <div class="col-md-8">
                                                        <input type="password" name="new_pass" class="form-control"  >
                                                    </div>
                                                </div>
                                                <div class="form-group text-right row" dir="rtl" >
                                                    <label class="col-md-4 col-form-label" for="example-email"> كلمة المرور الجديده  </label>
                                                    <div class="col-md-8">
                                                        <input type="password" name="conf_pass" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group text-right" >
                                                    <input  type="hidden" name="id" value="{{ $setting->id }}" >
                                                    <button type="submit" class="btn btn-primary"> حفظ </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade p-0" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                            <div id="Result" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>

    </div>
</div>
@endsection

@section('script')
    <script>
        //
        $(document).on('submit','#editForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('account.update',$setting->id) }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                    //Form.find("button[type='submit']").addAttr('disabled');
                },
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    $("#Result").html(data);
                    $('.fas').remove();
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });

        $(document).on('submit','#editPass',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('pass.update',$setting->id) }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                    //Form.find("button[type='submit']").addAttr('disabled');
                },
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    $("#Result").html(data);
                    $('.fas').remove();
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });

        $(document).on('submit','#logoForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('setting.logo',$setting->id) }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                   // Form.find("button[type='submit']").addAttr('disabled');
                },
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    $("#Result").html(data);
                    $('.fas').remove();
                    $('#imageModal').modal('hide');
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });
    </script>
@endsection
@section('editor')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
