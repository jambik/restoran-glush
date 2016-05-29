@extends('layouts.app')

@section('title', $category->title ?: $category->name)

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('catalog') }}">Меню</a></li>
        <li><a href="{{ route('catalog.category', $category->slug) }}">{{ $category->name }}</a></li>
    </ul>
@endsection

@section('content')
    <section id="products">
        <div class="container">
            <div class="text-xl text-center">{{ $category->name }}</div>
            <hr>
            @if ($children->count())
                <div class="row categories-list-line">
                    @foreach($children as $category)
                        <div class="col-lg-4">- <a href="{{ route('catalog.category', $category->slug) }}">{{ $category->name }}</a></div>
                    @endforeach
                </div>
            @endif

            @if ($products->count())
                <div class="row">
                    @each('catalog.product_tile', $products, 'product')
                </div>
            @else
                <div class="no-items text-center">- тут пока ничего нет -</div>
            @endif
        </div>
    </section>

    @include('partials._calculation')
@endsection