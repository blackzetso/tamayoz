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
                            <form id="editForm" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label mb-3"> إسم القسم </label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" >
                                    </div>
                                    <label class="col-md-2 col-form-label"> الأيقونة </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="icon" value="{{ $category->icon }}" placeholder="example : fa fa-user">
                                        <span>يمكنك اختيار المزيد من الأيقونات من خلال النقر <a href="https://fontawesome.com/v5/search" target="_blank" >هنا</a></span>
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> اللغه </label>
                                    <div class="col-md-10"> 
                                        <select class="form-control" name="lang" required>
                                            <option >حدد اللغه</option>
                                            <option @php if($category->lang == '1'){ echo "selected"; } @endphp value="1" >عربى</option>
                                            <option @php if($category->lang == '2'){ echo "selected"; }@endphp value="2" >English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-right" >
                                    <input  type="hidden" name="id" value="{{ $category->id }}" >
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
                url:"{{ route('categories.update',$category->id) }}",
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
