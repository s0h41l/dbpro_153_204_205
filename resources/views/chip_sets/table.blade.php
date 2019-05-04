<table class="table table-responsive-sm table-striped" id="chipSets-table">
    <thead>
        <th>Id</th>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($chipSets as $chipSet)
        <tr>
            <td>{!! $chipSet->id !!}</td>
            <td>{!! $chipSet->details !!}</td>
            <td>
                {!! Form::open(['route' => ['chipSets.destroy', $chipSet->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('chipSets.show', [$chipSet->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('chipSets.edit', [$chipSet->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{ $chipSets->links() }}
    </tbody>
</table>