@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item active" aria-current="page"> عرض الشرائح </li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('sliders.update',$slide->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> العنوان </label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" value="{{ $slide->title }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label" for="example-email"> العنوان الفرعى </label>
                                    <div class="col-md-10">
                                        <input type="text" name="subtitle" class="form-control" value="{{ $slide->subtitle }}">
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> اسم الزر </label>
                                    <div class="col-md-10">
                                        <input type="text" name="button" class="form-control" value="{{ $slide->button }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> رابط الزر </label>
                                    <div class="col-md-10">
                                        <input type="url" name="url" class="form-control" value="{{ $slide->url }}">
                                    </div>
                                </div>
                                <div class="form-group row" dir="rtl" >
                                    <label class="col-md-2 text-right col-form-label"> اللغه </label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="lang" required>
                                            <option >حدد اللغه</option>
                                            <option @php if($slide->lang == '1'){ echo "selected"; } @endphp value="1" >عربى</option>
                                            <option @php if($slide->lang == '2'){ echo "selected"; }@endphp value="2" >English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group files color row"   >
                                    <label class="col-md-12 col-form-label text-right mb-3"> الصورة </label>
                                    <div class="col-md-12">
                                        <input type="file" name="img" class="form-control1" >
                                    </div>
                                </div>
                                
                                <div class="form-group text-right" >
                                    <input  type="hidden" name="id" value="{{ $slide->id }}" >
                                    <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                                    <button type="submit" class="btn btn-primary"> حفظ </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
@endsection

@section('script')

    <script>
        $(document).on('submit','#addForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('sliders.store') }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                    //Form.find("button[type='submit']").attr('disabled','true');
                },
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    $("#tableResult").html(data);
                    $('.fas').remove();
                    $('#addModal').modal('hide');
                    Form.find("button[type='submit']").removeAttr('disabled');
                    //location.reload();
                },
            })
        });
    </script>
@endsection
