<table class="table table-responsive-sm table-striped" id="screenSizes-table">
    <thead>
        <th>Size</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($screenSizes as $screenSize)
        <tr>
            <td>{!! $screenSize->size !!}</td>
            <td>
                {!! Form::open(['route' => ['screenSizes.destroy', $screenSize->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('screenSizes.show', [$screenSize->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('screenSizes.edit', [$screenSize->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$screenSizes->links()}}
    </tbody>
</table>