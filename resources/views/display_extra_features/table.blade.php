<table class="table table-responsive-sm table-striped" id="displayExtraFeatures-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($displayExtraFeatures as $displayExtraFeature)
        <tr>
            <td>{!! $displayExtraFeature->details !!}</td>
            <td>
                {!! Form::open(['route' => ['displayExtraFeatures.destroy', $displayExtraFeature->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('displayExtraFeatures.show', [$displayExtraFeature->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('displayExtraFeatures.edit', [$displayExtraFeature->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$displayExtraFeatures->links()}}
    </tbody>
</table>