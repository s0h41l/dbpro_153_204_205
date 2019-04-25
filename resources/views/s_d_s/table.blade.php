<table class="table table-responsive-sm table-striped" id="sDS-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sDS as $sD)
        <tr>
            <td>{!! $sD->details !!}</td>
            <td>
                {!! Form::open(['route' => ['sDS.destroy', $sD->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sDS.show', [$sD->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('sDS.edit', [$sD->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>