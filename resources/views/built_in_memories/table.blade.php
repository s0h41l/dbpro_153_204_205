<table class="table table-responsive-sm table-striped" id="builtInMemories-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($builtInMemories as $builtInMemory)
        <tr>
            <td>{!! $builtInMemory->details !!}</td>
            <td>
                {!! Form::open(['route' => ['builtInMemories.destroy', $builtInMemory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('builtInMemories.show', [$builtInMemory->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('builtInMemories.edit', [$builtInMemory->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>