@extends('layouts.app')

@section('title', $item->title ? $item->title : $item->name)

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('articles') }}">Статьи</a></li>
        <li><a href="{{ route('articles.show', $item->slug) }}">{{ $item->name }}</a></li>
    </ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            <div><a href="{{ route('articles') }}"><i class="fa fa-chevron-left"></i> все статьи</a></div>
            <h1>{{ $item->name }}</h1>
            {!! $item->text !!}
        </div>
    </section>

    @include('partials._calculation')
@endsection