<table class="table table-responsive-sm table-striped" id="devices-table">
    <thead>
        <th>Description</th>
        <th>Release Date</th>
        <th>Price</th>
        <th>Os Id</th>
        <th>Cover Image</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($devices as $device)
        <tr>
            <td>{!! $device->description !!}</td>
            <td>{!! $device->release_date !!}</td>
            <td>{!! $device->price !!}</td>
            <td>{!! $device->os_id !!}</td>
            <td>{!! $device->cover_image !!}</td>
            <td>
                {!! Form::open(['route' => ['devices.destroy', $device->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('devices.show', [$device->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('devices.edit', [$device->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$devices->links()}}
    </tbody>
</table>