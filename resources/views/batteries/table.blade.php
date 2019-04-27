<table class="table table-responsive-sm table-striped" id="batteries-table">
    <thead>
        <th>Details</th>
        <th>Capacity</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($batteries as $batterie)
        <tr>
            <td>{!! $batterie->details !!}</td>
            <td>{!! $batterie->capacity !!}</td>
            <td>
                {!! Form::open(['route' => ['batteries.destroy', $batterie->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('batteries.show', [$batterie->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('batteries.edit', [$batterie->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{ $batteries->links() }}
    </tbody>


</table>