<table class="table table-responsive-sm table-striped" id="torches-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($torches as $torch)
        <tr>
            <td>{!! $torch->details !!}</td>
            <td>
                {!! Form::open(['route' => ['torches.destroy', $torch->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('torches.show', [$torch->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('torches.edit', [$torch->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>