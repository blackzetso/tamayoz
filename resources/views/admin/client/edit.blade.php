@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item"><a href="/admin/clients"> العملاء </a></li>
            <li class="breadcrumb-item active"> {{ $client->name }} </li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3" dir="rtl" >
                                <div class="col-4 text-right" >
                                    <label>الصورة</label>
                                </div>
                                <div class="col-4" >
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#imageModal" >
                                        <img src="{{ asset('front/images/clients') }}/{{ $client->img }}" style="width: 100%" >
                                    </a>
                                </div>
                            </div>
                            <form id="editForm"  method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> الإسم </label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="{{ $client->name }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> نبذة </label>
                                    <div class="col-md-10">
                                        <textarea name="caption" class="form-control" >{{ $client->caption }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> الرابط </label>
                                    <div class="col-md-10">
                                        <input type="url" name="url" class="form-control" value="{{ $client->url }}" >
                                    </div>
                                </div>
                                <div class="form-group text-right row" dir="rtl" >
                                    <label class="col-md-2 col-form-label"> اللغه </label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="lang" required>
                                            <option >حدد اللغه</option>
                                            <option @php if($client->lang == '1'){ echo "selected"; } @endphp value="1" >عربى</option>
                                            <option @php if($client->lang == '2'){ echo "selected"; }@endphp value="2" >English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-right" >
                                    <input  type="hidden" name="id" value="{{ $client->id }}" >
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
        $(document).on('submit','#editForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('clients.update',$client->id) }}",
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
                url:"{{ route('client.img',$client->id) }}",
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
