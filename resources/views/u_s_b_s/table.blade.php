<table class="table table-responsive-sm table-striped" id="uSBS-table">
    <thead>
        <th>Details</th>
        <th>Version</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($uSBS as $uSB)
        <tr>
            <td>{!! $uSB->details !!}</td>
            <td>{!! $uSB->version !!}</td>
            <td>
                {!! Form::open(['route' => ['uSBS.destroy', $uSB->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('uSBS.show', [$uSB->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('uSBS.edit', [$uSB->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>