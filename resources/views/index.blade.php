@extends('layouts.app')

@section('title', 'Ресторан Глушь')

@section('content')
    <section id="about-us">
        {!! $page->text !!}
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

    <section id="menu-preview">
        <div class="container-fluid">
            <div class="text-xl text-center">Анонсы ресторанного меню</div>
            <div class="row">
                <div class="clearfix products-previews">
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-1.jpg') }}')">
                        <div class="product-name">Яичница или омлет с одним ингредиентом на выбор</div>
                        <div class="product-category"><span>Завтраки</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-2.jpg') }}')">
                        <div class="product-name">Каша геркулесовая</div>
                        <div class="product-category"><span>Завтраки</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-3.jpg') }}')">
                        <div class="product-name">Суп «Кур-Вар»</div>
                        <div class="product-category"><span>Первые блюда</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-4.jpg') }}')">
                        <div class="product-name">«Кораловый риф»</div>
                        <div class="product-category"><span>Салаты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-5.jpg') }}')">
                        <div class="product-name">Салат «Адвокат»</div>
                        <div class="product-category"><span>Салаты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-6.jpg') }}')">
                        <div class="product-name">Штрудель</div>
                        <div class="product-category"><span>Десерты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-7.jpg') }}')">
                        <div class="product-name">«Форелька»</div>
                        <div class="product-category"><span>Блюда на гриле</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-1.jpg') }}')">
                        <div class="product-name">Яичница или омлет с одним ингредиентом на выбор</div>
                        <div class="product-category"><span>Завтраки</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-2.jpg') }}')">
                        <div class="product-name">Каша геркулесовая</div>
                        <div class="product-category"><span>Завтраки</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-3.jpg') }}')">
                        <div class="product-name">Суп «Кур-Вар»</div>
                        <div class="product-category"><span>Первые блюда</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-4.jpg') }}')">
                        <div class="product-name">«Кораловый риф»</div>
                        <div class="product-category"><span>Салаты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-5.jpg') }}')">
                        <div class="product-name">Салат «Адвокат»</div>
                        <div class="product-category"><span>Салаты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-6.jpg') }}')">
                        <div class="product-name">Штрудель</div>
                        <div class="product-category"><span>Десерты</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-7.jpg') }}')">
                        <div class="product-name">«Форелька»</div>
                        <div class="product-category"><span>Блюда на гриле</span></div>
                    </div>
                    <div class="product-preview" style="background-image: url('{{ asset('img/menu-anons-1.jpg') }}')">
                        <div class="product-name">Яичница или омлет с одним ингредиентом на выбор</div>
                        <div class="product-category"><span>Завтраки</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection