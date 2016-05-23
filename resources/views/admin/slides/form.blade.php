<div class="input-field col s12">
    {!! Form::label('title', 'Заголовок слайда') !!}
    {!! Form::text('title', null, ['class' => 'validate'.($errors->has('title') ? ' invalid' : '')]) !!}
</div>

<div class="input-field col s12">
    {!! Form::label('text', 'Текст слайда') !!}
    {!! Form::textarea('text', null, ['class' => 'validate materialize-textarea'.($errors->has('text') ? ' invalid' : '')]) !!}
</div>

<div class="input-field col s12">
    {!! Form::label('url', 'Url (ссылка)') !!}
    {!! Form::text('url', null, ['class' => 'validate materialize-textarea'.($errors->has('url') ? ' invalid' : '')]) !!}
</div>

@include('admin.partials._imageable')

<div class="input-field col s12 center">
    <button type="submit" class="btn-large waves-effect waves-light"><i class="material-icons left">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="input-field col s12 center">
    <a href="{{ route('admin.slides.index') }}" class="btn grey waves-effect waves-light">Отмена</a>
</div>