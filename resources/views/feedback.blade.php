@extends('layouts.app')

@section('title', 'Обратная связь')

@section('content')
    <h1>Обратная связь</h1>
    <div>&nbsp;</div>
    @include('partials._status')
    @include('partials._errors')
    <form action="{{ route('feedback.send') }}" method="POST" id="form_feedback">
        {!! Form::token() !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="name" placeholder="Имя" value="{{ old('name') }}">
        </div>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="phone" placeholder="Телефон" value="{{ old('phone') }}">
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
            <textarea class="form-control" name="message" placeholder="Сообщение" style="min-height: 150px;">{{ old('message') }}</textarea>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Отправить сообщение</button>
        </div>
    </form>
@endsection

@section('header_scripts')
    <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
@endsection