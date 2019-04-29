<table class="table table-responsive-sm table-striped" id="featureSensors-table">
    <thead>
        <th>Details</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($featureSensors as $featureSensor)
        <tr>
            <td>{!! $featureSensor->details !!}</td>
            <td>
                {!! Form::open(['route' => ['featureSensors.destroy', $featureSensor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('featureSensors.show', [$featureSensor->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('featureSensors.edit', [$featureSensor->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$featureSensors->links()}}
    </tbody>
</table>