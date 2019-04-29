<table class="table table-responsive-sm table-striped" id="mainMemories-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($mainMemories as $mainMemory)
        <tr>
            <td>{!! $mainMemory->details !!}</td>
            <td>
                {!! Form::open(['route' => ['mainMemories.destroy', $mainMemory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mainMemories.show', [$mainMemory->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('mainMemories.edit', [$mainMemory->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$mainMemories->links()}}
    </tbody>
</table>