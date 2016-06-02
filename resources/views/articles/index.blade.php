@extends('layouts.app')

@section('onload') onload="$('body').scrollTo($('#below-header'), 1000)" @endsection

@section('title', 'Статьи')

@section('header_attributes') @if (isset($page) && $page->header->count() && $page->header->first()->image) style="background-image: url('/images/original/{{ $page->header->first()->img_url . $page->header->first()->image }}')" @endif @endsection
@section('slogan') @if (isset($page) && $page->header->count() && $page->header->first()->title) {{ $page->header->first()->title }} @endif @endsection

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('articles') }}">Статьи</a></li>
    </ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            <h1>Статьи</h1>
            <hr>
            @if ($articles->count())
                <div class="articles-list">
                    @foreach($articles as $value)
                        <div class="item">
                            <div class="name"><a href="{{ route('articles.show', $value->slug) }}">{{ $value->name }}</a></div>
                            <p>{{ str_limit(strip_tags($value->text), 150, '...') }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-items">Раздел пока пуст</div>
            @endif
        </div>
    </section>

    @include('partials._calculation')
@endsection

@section('copyright') Сделано web-студия jeny-art.ru @endsection