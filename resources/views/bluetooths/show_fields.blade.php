<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $bluetooth->id !!}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $bluetooth->details !!}</p>
</div>

<!-- Version Field -->
<div class="form-group">
    {!! Form::label('version', 'Version:') !!}
    <p>{!! $bluetooth->version !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $bluetooth->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $bluetooth->updated_at !!}</p>
</div>

