@extends('admin.layout.app')
@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"> لوحة التحكم </a></li>
            <li class="breadcrumb-item active" aria-current="page"> قائمة روابط مواقع التواصل الإجتماعى </li>
        </ol>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" >
                            <div class="float-right">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="ion ion-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h4> قائمة روابط التواصل الإجتماعى </h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-right" dir="rtl" >
                                <div class="col-md-4" >
                                     <button class="btn btn-secondary mb-4" data-toggle="modal" data-target="#addModal" >
                                        <i class="fa fa-plus" ></i>
                                        إضافة رابط جديد
                                     </button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped text-center table-bordered mb-0 text-nowrap">
                                    <tr>
                                        <th>#</th>
                                        <th> الإسم </th>
                                        <th> الأيقونه </th>
                                        <th> <i class="fa fa-coge" ></i> </th>
                                    </tr>
                                    @include('admin.social.table')
                                </table>
                            </div>
                            <div class="row"  >
                                <div id="tableResult" class="col-12" >
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
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
@endsection
@section('modal')
<div class="modal fade" id="addModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3"> إضافه رابط جديد </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addForm" class="form-horizontal" enctype="multipart/form-data" >
                <div class="modal-body text-right">
                    <div class="form-group row" dir="rtl" >
                        <label class="col-md-3 col-form-label"> الإسم </label>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-body text-right">
                    <div class="form-group row" dir="rtl" >
                        <label class="col-md-3 col-form-label"> الأيقونة </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="icon" placeholder="example : fa-user">
                            <span>يمكنك اختيار المزيد من الأيقونات من خلال النقر <a href="https://fontawesome.com/v5/search" target="_blank" >هنا</a></span>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-right">
                    <div class="form-group row" dir="rtl" >
                        <label class="col-md-3 col-form-label"> الرابط </label>
                        <div class="col-md-9">
                            <input type="url" name="url" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">تراجع</button>
                    <button type="submit" class="btn btn-primary"> حفظ </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        IconPicker.Init({
        // Required: You have to set the path of IconPicker JSON file to "jsonUrl" option. e.g. '/content/plugins/IconPicker/dist/iconpicker-1.5.0.json'
        jsonUrl: "{{ asset('dashboard/dist/iconpicker-1.5.0.json')}} ",
        // Optional: Change the buttons or search placeholder text according to the language.
        searchPlaceholder: 'Search Icon',
        showAllButton: 'Show All',
        cancelButton: 'Cancel',
        noResultsFound: 'No results found.', // v1.5.0 and the next versions
        borderRadius: '20px', // v1.5.0 and the next versions
        });
    </script>
    <script>
        $(document).on('click','.delete',function(e){
            e.preventDefault();
            var id  = $(this).data('id');
            $("#delModal .del-btn").attr('data-id',id);
            $("#delModal .hidden-input").attr('value',id);
        });

        $(document).on('submit','#delForm',function(e){
            e.preventDefault();
            var idd = $('#delModal .del-btn').data('id');
            var Form = $(this);
            $.ajax(
                {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: "socials/" + idd,
                    beforeSend:function(){
                        Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                        Form.find("button[type='submit']").attr('disabled','true');
                    },
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(data){
                        $("#tableResult").html(data);
                        $('.fas').remove();
                        $('#delModal').modal('hide');
                        Form.find("button[type='submit']").removeAttr('disabled');
                    },
                });
        });

        $(document).on('submit','#addForm',function(event){
            event.preventDefault();
            var Form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:"{{ route('socials.store') }}",
                beforeSend:function(){
                    Form.find("button[type='submit']").prepend('<i class="fas fa-sync fa-spin"></i>');
                    Form.find("button[type='submit']").attr('disabled','true');
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
