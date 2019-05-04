<table class="table table-responsive-sm table-striped" id="data-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $data)
        <tr>
            <td>{!! $data->details !!}</td>
            <td>
                {!! Form::open(['route' => ['data.destroy', $data->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('data.show', [$data->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('data.edit', [$data->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$data->links()}}
    </tbody>
</table>