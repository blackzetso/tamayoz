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
                        <div class="card-body">
                            <div class="row" dir="rtl">
                                <div class="col-6" >
                                    <h4 class="text-center" >عربى</h4>
                                    <form method="POST" class="form-horizontal editForm" enctype="multipart/form-data" >
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-3 col-form-label"> رقم الهاتف </label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" class="form-control" value="{{ $contact_ar->phone }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-3 col-form-label" for="example-email"> البريد الإلكترونى </label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control" value="{{ $contact_ar->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-3 col-form-label" for="example-email"> العنوان </label>
                                            <div class="col-md-9">
                                                <input type="text" name="adress" class="form-control" value="{{ $contact_ar->adress }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-3 col-form-label"> خط العرض </label>
                                            <div class="col-md-9">
                                                <input type="text" name="lat" class="form-control" value="{{ $contact_ar->lat }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" dir="rtl" >
                                            <label class="col-md-3 col-form-label"> خط الطول </label>
                                            <div class="col-md-9">
                                                <input type="text" name="long" class="form-control" value="{{ $contact_ar->long }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" >
                                            <div class="col-md-3" ></div>
                                            <div class="col-md-9" >
                                                <input  type="hidden" name="id" value="{{ $contact_ar->id }}" >
                                                <input  type="hidden" name="lang" value="1" >
                                                <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                                <button type="submit" class="btn btn-primary"> حفظ </button>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                                <div class="col-6" >
                                    <h4 class="text-center" >English</h4>
                                    <form method="POST" class="form-horizontal editForm" enctype="multipart/form-data" >
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group text-right row"  >
                                            <label class="col-md-3 col-form-label"> رقم الهاتف </label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" class="form-control" value="{{ $contact_en->phone }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row"  >
                                            <label class="col-md-3 col-form-label" for="example-email"> البريد الإلكترونى </label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control" value="{{ $contact_en->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row"  >
                                            <label class="col-md-3 col-form-label" for="example-email"> العنوان </label>
                                            <div class="col-md-9">
                                                <input type="text" name="adress" class="form-control" value="{{ $contact_en->adress }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" >
                                            <label class="col-md-3 col-form-label"> خط العرض </label>
                                            <div class="col-md-9">
                                                <input type="text" name="lat" class="form-control" value="{{ $contact_en->lat }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" >
                                            <label class="col-md-3 col-form-label"> خط الطول </label>
                                            <div class="col-md-9">
                                                <input type="text" name="long" class="form-control" value="{{ $contact_en->long }}" >
                                            </div>
                                        </div>
                                        <div class="form-group text-right row" >
                                            <div class="col-md-3" ></div>
                                            <div class="col-md-9" >
                                                <input  type="hidden" name="id" value="{{ $contact_en->id }}" >
                                                <input  type="hidden" name="lang" value="2" >
                                                <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                                <button type="submit" class="btn btn-primary"> حفظ </button>
                                            </div> 
                                        </div>
                                    </form>
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
        $(document).on('submit','.editForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('contact.update') }}",
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
       
    </script>
@endsection
@section('editor')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
