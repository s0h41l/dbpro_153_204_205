<table class="table table-responsive-sm table-striped" id="extraFeatures-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($extraFeatures as $extraFeature)
        <tr>
            <td>{!! $extraFeature->details !!}</td>
            <td>
                {!! Form::open(['route' => ['extraFeatures.destroy', $extraFeature->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('extraFeatures.show', [$extraFeature->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('extraFeatures.edit', [$extraFeature->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>