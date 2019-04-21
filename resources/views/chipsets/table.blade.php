<table class="table table-responsive-sm table-striped" id="chipsets-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>

    @foreach($chipsets as $chipset)
        <tr>
            <td>{!! $chipset->details !!}</td>
            <td>
                {!! Form::open(['route' => ['chipsets.destroy', $chipset->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('chipsets.show', [$chipset->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('chipsets.edit', [$chipset->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach


    </tbody>
</table>