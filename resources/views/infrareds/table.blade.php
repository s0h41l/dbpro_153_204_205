<table class="table table-responsive-sm table-striped" id="infrareds-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($infrareds as $infrared)
        <tr>
            <td>{!! $infrared->details !!}</td>
            <td>
                {!! Form::open(['route' => ['infrareds.destroy', $infrared->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('infrareds.show', [$infrared->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('infrareds.edit', [$infrared->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>