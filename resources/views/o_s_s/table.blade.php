<table class="table table-responsive-sm table-striped" id="oSS-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($oSS as $oS)
        <tr>
            <td>{!! $oS->details !!}</td>
            <td>
                {!! Form::open(['route' => ['oSS.destroy', $oS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('oSS.show', [$oS->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('oSS.edit', [$oS->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$oSS->links()}}
    </tbody>
</table>