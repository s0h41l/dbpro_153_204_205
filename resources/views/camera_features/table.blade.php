<table class="table table-responsive-sm table-striped" id="cameraFeatures-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($cameraFeatures as $cameraFeature)
        <tr>
            <td>{!! $cameraFeature->details !!}</td>
            <td>
                {!! Form::open(['route' => ['cameraFeatures.destroy', $cameraFeature->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cameraFeatures.show', [$cameraFeature->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('cameraFeatures.edit', [$cameraFeature->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$cameraFeatures->links()}}
    </tbody>
</table>