<table class="table table-responsive-sm table-striped" id="screenResolutions-table">
    <thead>
        <th>Height</th>
        <th>Width</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($screenResolutions as $screenResolution)
        <tr>
            <td>{!! $screenResolution->height !!}</td>
            <td>{!! $screenResolution->width !!}</td>
            <td>
                {!! Form::open(['route' => ['screenResolutions.destroy', $screenResolution->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('screenResolutions.show', [$screenResolution->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('screenResolutions.edit', [$screenResolution->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>