@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item active"><a href="/admin/1/about"> من نحن </a></li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>من نحن</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills pb-3" id="myTab3" role="tablist" dir="rtl">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#ar" role="tab" aria-controls="home" aria-selected="true">عربى</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#en" role="tab" aria-controls="profile" aria-selected="false">English</a>
                                </li>
                            </ul>
                            <div class="tab-content border-top p-3" id="myTabContent3">
                                <div class="tab-pane fade show active p-0" id="ar" role="tabpanel" aria-labelledby="home-tab3">
                                    <div class="row mb-3" dir="rtl" >
                                        <div class="col-4 text-right" >
                                            <label>الصورة</label>
                                        </div>
                                        <div class="col-4" >
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#imageModal" >
                                                <img src="{{ asset('front/images/') }}/{{ $about_ar->img }}" style="width: 100%" >
                                            </a>
                                    </div>
                                    </div>
                                    <form method="POST" class="form-horizontal editForm" enctype="multipart/form-data" >
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> العنوان </label>
                                            <div class="col-md-10">
                                                <input type="text" name="title" class="form-control" value="{{ $about_ar->title }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label" for="example-email"> العنوان الفرعى </label>
                                            <div class="col-md-10">
                                                <input type="text" name="subtitle" class="form-control" value="{{ $about_ar->subtitle }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> الوصف </label>
                                            <div class="col-md-10">
                                                <textarea name="content" >{{ $about_ar->content }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> رابط الزر </label>
                                            <div class="col-md-10">
                                                <input type="url" name="url" class="form-control" value="{{ $about_ar->url }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> إسم الزر </label>
                                            <div class="col-md-10">
                                                <input type="text" name="button" class="form-control" value="{{ $about_ar->button }}" >
                                            </div>
                                        </div>

                                        <div class="form-group text-right" >
                                            <input  type="hidden" name="id" value="{{ $about_ar->id }}" >
                                            <input  type="hidden" name="lang" value="1" >
                                            <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                            <button type="submit" class="btn btn-primary"> حفظ </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade p-0" id="en" role="tabpanel" aria-labelledby="profile-tab3">
                                    <div class="row mb-3" dir="rtl" >
                                        <div class="col-4 text-right" >
                                            <label>الصورة</label>
                                        </div>
                                        <div class="col-4" >
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#imageModal" >
                                                <img src="{{ asset('front/images/') }}/{{ $about_en->img }}" style="width: 100%" >
                                            </a>
                                        </div>
                                    </div>
                                    <form method="POST" class="form-horizontal editForm" enctype="multipart/form-data" >
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> العنوان </label>
                                            <div class="col-md-10">
                                                <input type="text" name="title" class="form-control" value="{{ $about_en->title }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label" for="example-email"> العنوان الفرعى </label>
                                            <div class="col-md-10">
                                                <input type="text" name="subtitle" class="form-control" value="{{ $about_en->subtitle }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> الوصف </label>
                                            <div class="col-md-10">
                                                <textarea name="content2" >{{ $about_en->content }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> رابط الزر </label>
                                            <div class="col-md-10">
                                                <input type="url" name="url" class="form-control" value="{{ $about_en->url }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-2 col-form-label"> إسم الزر </label>
                                            <div class="col-md-10">
                                                <input type="text" name="button" class="form-control" value="{{ $about_en->button }}" >
                                            </div>
                                        </div>

                                        <div class="form-group text-right" >
                                            <input  type="hidden" name="id" value="{{ $about_en->id }}" >
                                            <input  type="hidden" name="lang" value="2" >
                                            <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                            <button type="submit" class="btn btn-primary"> حفظ </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<div class="modal fade" id="delModal" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="delForm">
                @csrf
                <div class="modal-body text-right">
                    هل انت متأكد من انك تريد حذف هذا العنصر ؟
                </div>
                <div class="modal-footer">

                    <input type="hidden" class="hidden-input" name="id" value="" >
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"> تراجع </button>
                    <button class="btn btn-primary del-btn " type="submit"> حذف </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="imageForm" class="form-horizontal" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="modal-body text-right">
                    <div class="form-group files color row"   >
                        <label class="col-md-12 col-form-label text-right mb-3"> الصورة </label>
                        <div class="col-md-12">
                            <input type="file" name="img" class="form-control1" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                    <button type="submit" class="btn btn-primary"> حفظ </button>
                </div>
            </form>
        </div>
        <div id="Result" ></div>
    </div>
</div>
@endsection

@section('script')
    <script>
        //
        // $(document).on('click','.delete',function(e){
        //     e.preventDefault();
        //     var id  = $(this).data('id');
        //     $("#delModal .del-btn").attr('data-id',id);
        //     $("#delModal .hidden-input").attr('value',id);
        // });
        //
        // $(document).on('submit','#delForm',function(e){
        //     e.preventDefault();
        //     var idd = $('#delModal .del-btn').data('id');
        //     var Form = $(this);
        //     $.ajax(
        //         {
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             type: 'DELETE',
        //             url: "about/" + idd,
        //             beforeSend:function(){
        //                 Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
        //                 Form.find("button[type='submit']").attr('disabled','true');
        //             },
        //             data:new FormData(this),
        //             contentType:false,
        //             processData:false,
        //             success:function(data){
        //                 $("#tableResult").html(data);
        //                 $('.fas').remove();
        //                 $('#delModal').modal('hide');
        //                 Form.find("button[type='submit']").removeAttr('disabled');
        //             },
        //         });
        // });
        $(document).on('submit','.editForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('about.update') }}",
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
                    $('#addModal').modal('hide');
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });
        $(document).on('submit','#imageForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('about.img') }}",
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
    <script>
        CKEDITOR.replace('content2');
    </script>
@endsection
