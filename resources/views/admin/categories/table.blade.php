@foreach ($categories as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td class="align-middle">
        {{ $row->name }}
    </td>
    <td>
        <a href="/admin/categories/{{ $row->id }}/edit" class="btn btn-action btn-success"> <i class="fa fa-edit" ></i> </a>
        <a href="javascript:void(0)" data-toggle="modal" data-id="{{ $row->id }}" data-target="#delModal" class="btn btn-action btn-danger delete"> <i class="fa fa-trash" ></i> </a>
    </td>
</tr>
@endforeach
