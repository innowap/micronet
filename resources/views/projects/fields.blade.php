<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Pages No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pages_no', 'Pages No:') !!}
    {!! Form::number('pages_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('project', 'Project:') !!}
    {!! Form::textarea('project', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('projects.index') !!}" class="btn btn-default">Cancel</a>
</div>
