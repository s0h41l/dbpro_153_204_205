<table class="table table-responsive-sm table-striped" id="bluetooths-table">
    <thead>
        <th>Details</th>
        <th>Version</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($bluetooths as $bluetooth)
        <tr>
            <td>{!! $bluetooth->details !!}</td>
            <td>{!! $bluetooth->version !!}</td>
            <td>
                {!! Form::open(['route' => ['bluetooths.destroy', $bluetooth->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bluetooths.show', [$bluetooth->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('bluetooths.edit', [$bluetooth->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$bluetooths->links()}}
    </tbody>
</table>