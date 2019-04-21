<table class="table table-responsive-sm table-striped" id="displayProtections-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($displayProtections as $displayProtection)
        <tr>
            <td>{!! $displayProtection->details !!}</td>
            <td>
                {!! Form::open(['route' => ['displayProtections.destroy', $displayProtection->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('displayProtections.show', [$displayProtection->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('displayProtections.edit', [$displayProtection->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>