<!-- Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Mega Pixels Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mega_pixels', 'Mega Pixels:') !!}
    {!! Form::number('mega_pixels', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mainCameras.index') !!}" class="btn btn-default">Cancel</a>
</div>
