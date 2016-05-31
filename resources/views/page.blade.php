@extends('layouts.app')

@section('title', $page->title)

@section('header_attributes') @if (isset($page) && $page->header->count() && $page->header->first()->image) style="background-image: url('/images/original/{{ $page->header->first()->img_url . $page->header->first()->image }}')" @endif @endsection
@section('slogan') @if (isset($page) && $page->header->count() && $page->header->first()->title) {{ $page->header->first()->title }} @endif @endsection

@section('below-more')
<ul>
    <li><a href="{{ route('index') }}">Главная</a></li>
    <li>{{ $page->name }}</li>
</ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            @include('partials._status')
            @include('partials._errors')

            {!! $page->text !!}
        </div>
    </section>

    @if ($page->slug == 'nashi-kontakty')
        <div>&nbsp;</div>
        <hr>
        <div>&nbsp;</div>
        <h3>Обратная связь</h3>
        <div>&nbsp;</div>
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
    @endif

    @include('partials._calculation')
@endsection

@section('header_scripts')
    <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
@endsection