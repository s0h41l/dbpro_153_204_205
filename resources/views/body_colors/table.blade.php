<table class="table table-responsive-sm table-striped" id="bodyColors-table">
    <thead>
        <th>Color</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($bodyColors as $bodyColor)
        <tr>
            <td>{!! $bodyColor->color !!}</td>
            <td>
                {!! Form::open(['route' => ['bodyColors.destroy', $bodyColor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bodyColors.show', [$bodyColor->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('bodyColors.edit', [$bodyColor->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    {{$bodyColors->links()}}
    </tbody>
</table>