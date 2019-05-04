<table class="table table-responsive-sm table-striped" id="games-table">
    <thead>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($games as $game)
        <tr>
            <td>{!! $game->details !!}</td>
            <td>
                {!! Form::open(['route' => ['games.destroy', $game->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('games.show', [$game->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('games.edit', [$game->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    {{$games->links()}}
    </tbody>
</table>