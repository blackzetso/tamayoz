@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item active" aria-current="page"> روابط التواصل الإجتماعى  </li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="editForm" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label mb-3"> إسم الرابط </label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="{{ $social->name }}" >
                                    </div>
                                    <label class="col-md-2 col-form-label"> الأيقونة </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="icon" value="{{ $social->icon }}" placeholder="example : fa fa-user">
                                        <span>يمكنك اختيار المزيد من الأيقونات من خلال النقر <a href="https://fontawesome.com/v5/search" target="_blank" >هنا</a></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <input type="url" name="url" class="form-control" value="{{ $social->url }}" >
                                </div>
                                <div class="form-group text-right" >
                                    <input  type="hidden" name="id" value="{{ $social->id }}" >
                                    <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                    <button type="submit" class="btn btn-primary"> حفظ </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Result" ></div>
    </section>

</div>
@endsection

@section('script')

    <script>
        $(document).on('submit','#editForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('socials.update',$social->id) }}",
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
