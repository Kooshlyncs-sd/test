<!-- Id Field -->
<div class="form-group row col-6">
  {!! Form::label('id', 'Id:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->id !!}</p>
  </div>
</div>

<!-- Name English Field -->
<div class="form-group row col-6">
  {!! Form::label('name_en', 'Name_en:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->name_en !!}</p>
  </div>
</div>
<!-- Name Arabic Field -->
<div class="form-group row col-6">
  {!! Form::label('name_ar', 'Name_ar:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->name_ar !!}</p>
  </div>
</div>

<!-- Description Field -->
<div class="form-group row col-6">
  {!! Form::label('description', 'Description:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->description !!}</p>
  </div>
</div>

<!-- Image Field -->
<div class="form-group row col-6">
  {!! Form::label('image', 'Image:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->image !!}</p>
  </div>
</div>

<!-- Markets Field -->
<div class="form-group row col-6">
  {!! Form::label('markets', 'Markets:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->markets !!}</p>
  </div>
</div>

<!-- Created At Field -->
<div class="form-group row col-6">
  {!! Form::label('created_at', 'Created At:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->created_at !!}</p>
  </div>
</div>

<!-- Updated At Field -->
<div class="form-group row col-6">
  {!! Form::label('updated_at', 'Updated At:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $field->updated_at !!}</p>
  </div>
</div>

