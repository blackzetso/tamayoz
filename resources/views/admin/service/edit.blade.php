@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item"><a href="/admin/services"> الخدمات </a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{ $service->category->name }} </li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('services.update',$service->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> تلحميح 1 </label>
                                    <div class="col-md-10">
                                        <input type="text" name="hint1" class="form-control" value="{{ $service->hint1 }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> تلحميح 2 </label>
                                    <div class="col-md-10">
                                        <input type="text" name="hint2" class="form-control" value="{{ $service->hint2 }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> تلحميح 3 </label>
                                    <div class="col-md-10">
                                        <input type="text" name="hint3" class="form-control" value="{{ $service->hint3 }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> الوصف </label>
                                    <div class="col-md-10">
                                        <textarea name="desc" >{{ $service->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> السعر </label>
                                    <div class="col-md-10">
                                        <input type="text" name="min_price" class="form-control" value="{{ $service->price }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> الخصم </label>
                                    <div class="col-md-10">
                                        <input type="text" name="max_price" class="form-control" value="{{ $service->Discount }}" >
                                    </div>
                                </div>
                                <div class="form-group row" dir="rtl" >
                                    <label class="col-md-2 col-form-label text-right"> القسم </label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="category" >
                                            @foreach($categories as $category)
                                                <option <?php if($category->id == $service->category_id){ echo 'selected'; } ?> value="{{ $category->id }}" > {{ $category->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" dir="rtl" >
                                    <label class="col-md-2 text-right col-form-label"> اللغه </label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="lang" required>
                                            <option >حدد اللغه</option>
                                            <option @php if($service->lang == '1'){ echo "selected"; } @endphp value="1" >عربى</option>
                                            <option @php if($service->lang == '2'){ echo "selected"; }@endphp value="2" >English</option>
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
                                    <input  type="hidden" name="id" value="{{ $service->id }}" >
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
@section('editor')
    <script>
        CKEDITOR.replace('desc');
    </script>
@endsection
