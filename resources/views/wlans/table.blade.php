<table class="table table-responsive-sm table-striped" id="wlans-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($wlans as $wlan)
        <tr>
            <td>{!! $wlan->details !!}</td>
            <td>
                {!! Form::open(['route' => ['wlans.destroy', $wlan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('wlans.show', [$wlan->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('wlans.edit', [$wlan->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>