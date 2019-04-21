<table class="table table-responsive-sm table-striped" id="uIS-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($uIS as $uI)
        <tr>
            <td>{!! $uI->details !!}</td>
            <td>
                {!! Form::open(['route' => ['uIS.destroy', $uI->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('uIS.show', [$uI->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('uIS.edit', [$uI->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>