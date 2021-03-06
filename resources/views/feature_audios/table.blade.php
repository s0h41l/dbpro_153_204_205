<table class="table table-responsive-sm table-striped" id="featureAudios-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($featureAudios as $featureAudio)
        <tr>
            <td>{!! $featureAudio->details !!}</td>
            <td>
                {!! Form::open(['route' => ['featureAudios.destroy', $featureAudio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('featureAudios.show', [$featureAudio->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('featureAudios.edit', [$featureAudio->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$featureAudios->links()}}
    </tbody>
</table>