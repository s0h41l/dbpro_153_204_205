<table class="table table-responsive-sm table-striped" id="mainCameras-table">
    <thead>
        <th>Details</th>
        <th>Mega Pixels</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($mainCameras as $mainCamera)
        <tr>
            <td>{!! $mainCamera->details !!}</td>
            <td>{!! $mainCamera->mega_pixels !!}</td>
            <td>
                {!! Form::open(['route' => ['mainCameras.destroy', $mainCamera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mainCameras.show', [$mainCamera->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('mainCameras.edit', [$mainCamera->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>