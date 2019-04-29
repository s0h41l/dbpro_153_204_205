<table class="table table-responsive-sm table-striped" id="radios-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($radios as $radio)
        <tr>
            <td>{!! $radio->details !!}</td>
            <td>
                {!! Form::open(['route' => ['radios.destroy', $radio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('radios.show', [$radio->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('radios.edit', [$radio->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$radios->links()}}
    </tbody>
</table>