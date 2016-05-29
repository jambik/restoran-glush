@extends('layouts.app')

@section('title', 'Каталог')

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('catalog') }}">Меню</a></li>
    </ul>
@endsection

@section('content')
    <section id="categories">
        <div class="container">
            <div class="text-xl text-center">Наше меню</div>
            <hr>
            <p>&nbsp;</p>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 category">
                        <div class="img"><a href="{{ route('catalog.category', $category->slug) }}">
                            @if ($category->image)
                                <img src="/images/medium/{{ $category->img_url . $category->image }}" class="img-responsive">
                            @else
                                <img src="/img/default.png" class="img-responsive">
                            @endif
                        </div>
                        <div class="name"><a href="{{ route('catalog.category', $category->slug) }}">{{ $category->name }}</a></div>
                        <div class="description">{{ strip_tags($category->about) }}</div>
                        <div class="more"><a href="{{ route('catalog.category', $category->slug) }}">подробнее</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials._calculation')
@endsection