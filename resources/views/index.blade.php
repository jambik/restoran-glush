@extends('layouts.app')

@section('title', 'Ресторан Глушь')

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
                    <div><span class="order">ЗАКАЖИТЕ БАНКЕТ</span> ПРЯМО СЕЙЧАС, И У ВАС БУДЕТ 20% СКИДКИ</div>
                </div>
                <div class="action-countdown">
                    До конца акции
                    <span class="countdown-digits">
                        <span>12</span>
                        <span>30</span>
                        <span>59</span>
                    </span> осталось
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
                            <div class="product-preview" style="background-image: url('/images/anons/{{ $product->img_url . $product->image }}')">
                                <div class="product-name">{{ $product->name }}</div>
                                <div class="product-category"><span>{{ $product->category->name }}</span></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @include('partials._calculation', ['show' => true])

    <section id="video">
        <img src="{{ asset('img/video.jpg') }}" class="img-responsive">
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
        <img src="{{ asset('img/map.jpg') }}" class="img-responsive">
    </section>
@endsection

@section('footer_scripts')
    @include('partials._recall')
@endsection