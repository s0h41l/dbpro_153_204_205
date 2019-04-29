<table class="table table-responsive-sm table-striped" id="displayTechnologies-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($displayTechnologies as $displayTechnologie)
        <tr>
            <td>{!! $displayTechnologie->details !!}</td>
            <td>
                {!! Form::open(['route' => ['displayTechnologies.destroy', $displayTechnologie->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('displayTechnologies.show', [$displayTechnologie->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('displayTechnologies.edit', [$displayTechnologie->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$displayTechnologies->links()}}
    </tbody>
</table>