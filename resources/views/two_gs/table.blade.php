<table class="table table-responsive-sm table-striped" id="twoGs-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($twoGs as $twoG)
        <tr>
            <td>{!! $twoG->details !!}</td>
            <td>
                {!! Form::open(['route' => ['twoGs.destroy', $twoG->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('twoGs.show', [$twoG->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('twoGs.edit', [$twoG->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$twoGs->links()}}
    </tbody>
</table>