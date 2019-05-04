<table class="table table-responsive-sm table-striped" id="gPSS-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($gPSS as $gPS)
        <tr>
            <td>{!! $gPS->details !!}</td>
            <td>
                {!! Form::open(['route' => ['gPSS.destroy', $gPS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gPSS.show', [$gPS->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('gPSS.edit', [$gPS->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$gPSS->links()}}
    </tbody>
</table>