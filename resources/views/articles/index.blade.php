@extends('layouts.app')

@section('title', 'Статьи')

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