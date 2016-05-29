<div class="input-field col s12 input-html">
    {!! Form::label('text', 'Отзыв') !!}
    {!! Form::textarea('text', null, ['class' => 'validate materialize-textarea'.($errors->has('text') ? ' invalid' : '')]) !!}
</div>

<div class="input-field col s12">
    {!! Form::label('name', 'Имя') !!}
    {!! Form::text('name', null, ['class' => 'validate'.($errors->has('name') ? ' invalid' : '')]) !!}
</div>

<div class="input-field col s12 input-checkbox">
    {!! Form::checkbox('approved', 1, null, ['id' => 'approved', 'class' => $errors->has('approved') ? ' invalid' : '']) !!}
    {!! Form::label('approved', 'Отображать') !!}
</div>

@include('admin.partials._imageable')

<div class="input-field col s12 center">
    <button type="submit" class="btn-large waves-effect waves-light"><i class="material-icons left">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="input-field col s12 center">
    <a href="{{ route('admin.recalls.index') }}" class="btn grey waves-effect waves-light">Отмена</a>
</div>