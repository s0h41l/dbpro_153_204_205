<table class="table table-responsive-sm table-striped" id="sims-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($sims as $sim)
        <tr>
            <td>{!! $sim->details !!}</td>
            <td>
                {!! Form::open(['route' => ['sims.destroy', $sim->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sims.show', [$sim->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('sims.edit', [$sim->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$sims->links()}}
    </tbody>
</table>