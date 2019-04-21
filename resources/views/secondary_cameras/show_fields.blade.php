<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $secondaryCamera->id !!}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $secondaryCamera->details !!}</p>
</div>

<!-- Mega Pixels Field -->
<div class="form-group">
    {!! Form::label('mega_pixels', 'Mega Pixels:') !!}
    <p>{!! $secondaryCamera->mega_pixels !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $secondaryCamera->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $secondaryCamera->updated_at !!}</p>
</div>

