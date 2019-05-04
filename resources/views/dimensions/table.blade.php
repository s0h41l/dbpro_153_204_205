<table class="table table-responsive-sm table-striped" id="dimensions-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($dimensions as $dimension)
        <tr>
            <td>{!! $dimension->details !!}</td>
            <td>
                {!! Form::open(['route' => ['dimensions.destroy', $dimension->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dimensions.show', [$dimension->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('dimensions.edit', [$dimension->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$dimensions->links()}}
    </tbody>
</table>