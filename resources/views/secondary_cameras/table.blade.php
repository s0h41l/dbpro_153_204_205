<table class="table table-responsive-sm table-striped" id="secondaryCameras-table">
    <thead>
        <th>Details</th>
        <th>Mega Pixels</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($secondaryCameras as $secondaryCamera)
        <tr>
            <td>{!! $secondaryCamera->details !!}</td>
            <td>{!! $secondaryCamera->mega_pixels !!}</td>
            <td>
                {!! Form::open(['route' => ['secondaryCameras.destroy', $secondaryCamera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('secondaryCameras.show', [$secondaryCamera->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('secondaryCameras.edit', [$secondaryCamera->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$secondaryCameras->links()}}
    </tbody>
</table>