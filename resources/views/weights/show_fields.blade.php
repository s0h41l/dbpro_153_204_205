<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $weight->id !!}</p>
</div>

<!-- Weight Field -->
<div class="form-group">
    {!! Form::label('weight', 'Weight:') !!}
    <p>{!! $weight->weight !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $weight->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $weight->updated_at !!}</p>
</div>

