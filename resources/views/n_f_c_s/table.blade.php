<table class="table table-responsive-sm table-striped" id="nFCS-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($nFCS as $nFC)
        <tr>
            <td>{!! $nFC->details !!}</td>
            <td>
                {!! Form::open(['route' => ['nFCS.destroy', $nFC->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nFCS.show', [$nFC->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('nFCS.edit', [$nFC->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$nFCS->links()}}
    </tbody>
</table>