<table class="table table-responsive-sm table-striped" id="browsers-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($browsers as $browser)
        <tr>
            <td>{!! $browser->details !!}</td>
            <td>
                {!! Form::open(['route' => ['browsers.destroy', $browser->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('browsers.show', [$browser->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('browsers.edit', [$browser->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{ $browsers->links() }}
    </tbody>
</table>