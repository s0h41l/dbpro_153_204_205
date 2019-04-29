<table class="table table-responsive-sm table-striped" id="weights-table">
    <thead>
        <th>Weight</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($weights as $weight)
        <tr>
            <td>{!! $weight->weight !!}</td>
            <td>
                {!! Form::open(['route' => ['weights.destroy', $weight->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('weights.show', [$weight->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('weights.edit', [$weight->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$weights->links()}}
    </tbody>
</table>