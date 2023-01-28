@foreach ($blogs as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td class="align-middle">
        {{ $row->name }}
    </td>
    <td>
        <img alt="image" src="{{ asset('front/images/team/') }}/{{ $row->img }}" width="40" data-toggle="title" title="Wildan Ahdian">
    </td>
    <td>
        <a href="/admin/blogs/{{ $row->id }}/edit" class="btn btn-action btn-success"> <i class="fa fa-edit" ></i> </a>
        <a href="javascript:void(0)" data-toggle="modal" data-id="{{ $row->id }}" data-target="#delModal" class="btn btn-action btn-danger delete"> <i class="fa fa-trash" ></i> </a>
    </td>
</tr>
@endforeach
