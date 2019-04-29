<table class="table table-responsive-sm table-striped" id="frequencies-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($frequencies as $frequency)
        <tr>
            <td>{!! $frequency->details !!}</td>
            <td>
                {!! Form::open(['route' => ['frequencies.destroy', $frequency->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frequencies.show', [$frequency->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('frequencies.edit', [$frequency->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$frequencies->links()}}
    </tbody>
</table>