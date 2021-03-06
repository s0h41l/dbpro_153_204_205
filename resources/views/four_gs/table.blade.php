<table class="table table-responsive-sm table-striped" id="fourGs-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($fourGs as $fourG)
        <tr>
            <td>{!! $fourG->details !!}</td>
            <td>
                {!! Form::open(['route' => ['fourGs.destroy', $fourG->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fourGs.show', [$fourG->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('fourGs.edit', [$fourG->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$fourGs->links()}}
    </tbody>
</table>