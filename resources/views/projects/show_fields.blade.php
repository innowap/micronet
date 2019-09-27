<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $project->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $project->title !!}</p>
</div>

<!-- Pages No Field -->
<div class="form-group">
    {!! Form::label('pages_no', 'Pages No:') !!}
    <p>{!! $project->pages_no !!}</p>
</div>

<!-- Project Field -->
<div class="form-group">
    {!! Form::label('project', 'Project:') !!}
    <p>{!! $project->project !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $project->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $project->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $project->updated_at !!}</p>
</div>

