@extends('layouts.app')

@section('title', $page->title)

@section('header_attributes')data-slides='["{{ asset('img/header-lamp.jpg') }}","{{ asset('img/header-menu.jpg') }}","{{ asset('img/header-category.jpg') }}"]'@endsection

@section('content')
    <section id="content" style="background: #f7f7f7;">
        <div class="container">
            {!! $page->text !!}
        </div>
    </section>

    <section id="action">
        <div class="container text-center">
            <div class="action-wrapper">
                <div class="action-text">
                    <div>ВНИМАНИЕ! У НАС СЕЗОННАЯ АКЦИЯ НА БАНКЕТ </div>
                    <div><a class="order" href="#" onclick="$('body').scrollTo($('#calculation'), 500)">ЗАКАЖИТЕ БАНКЕТ</a> ПРЯМО СЕЙЧАС, И У ВАС БУДЕТ 20% СКИДКИ</div>
                </div>
                <div class="action-countdown">
                    <span class="countdown-words">До конца акции</span>
                    <span class="countdown-digits" id="countdown">
                        <span class="time-item">
                            <span class="time-name">дней</span>
                            <span class="time-digits">12</span>
                        </span>
                        <span class="time-item">
                            <span class="time-name">часов</span>
                            <span class="time-digits">30</span>
                        </span>
                        <span class="time-item">
                            <span class="time-name">минут</span>
                            <span class="time-digits">59</span>
                        </span>
                    </span>
                    <span class="countdown-words">осталось</span>
                </div>
            </div>
        </div>
    </section>

    @if ($productsPreview)
        <section id="menu-preview">
            <div class="container-fluid">
                <div class="text-xl text-center">Анонсы ресторанного меню</div>
                <div class="row">
                    <div class="clearfix products-previews">
                        @foreach ($productsPreview as $product)
                            <a href="{{ route('catalog.category', $product->category->slug) . '#product-' . $product->id }}">
                                <div class="product-preview hvr-sweep-to-bottom" style="background-image: url('/images/anons/{{ $product->img_url . $product->image }}')">
                                    <div class="product-name">{{ $product->name }}</div>
                                    <div class="product-details">
                                        <div class="product-price">цена <strong>{{ $product->price }}</strong> руб.</div>
                                        <div class="product-more">подробнее о блюде</div>
                                    </div>
                                    <div class="product-category"><span>{{ $product->category->name }}</span></div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @include('partials._calculation', ['show' => true])

    <section id="video">
        {!! $settings->video !!}
    </section>

    <section id="recalls">
        <div class="container">
            <div class="text-xl text-center">Отзывы</div>
            @if ( ! $recalls->count())
                <p class="text-center">- отзывов пока нет -</p>
                <p class="text-center">&nbsp;</p>
            @endif
            @foreach($recalls as $recall)
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        @if($recall->image)
                            <img src="/images/square/{{ $recall->img_url . $recall->image }}" class="img-responsive img-circle">
                        @else
                            <img src="/img/default.png" class="img-responsive img-circle">
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <blockquote>
                            <p>{{ $recall->text }}</p>
                            <div>{{ $recall->name }} - <cite>{{ $recall->created_at->toDateString() }}</cite></div>
                        </blockquote>
                    </div>
                </div>
            @endforeach

            <div class="text-center">
                <a href="#" data-toggle="modal" data-target="#recallModal" class="btn btn-lg btn-danger">Оставить свой отзыв</a>
            </div>
        </div>
    </section>

    <section id="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=E4XyfmeSWzf7HFsdCFnBV8bPQ8Tz3_Ml&width=100%&height=720&lang=ru_RU&sourceType=constructor&scroll=true"></script>
    </section>
@endsection

@section('footer_scripts')
    @include('partials._recall')
@endsection