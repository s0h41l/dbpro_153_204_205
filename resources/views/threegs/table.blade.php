<table class="table table-responsive-sm table-striped" id="threegs-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($threegs as $threeg)
        <tr>
            <td>{!! $threeg->details !!}</td>
            <td>
                {!! Form::open(['route' => ['threegs.destroy', $threeg->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('threegs.show', [$threeg->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('threegs.edit', [$threeg->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$threegs->links()}}
    </tbody>
</table>