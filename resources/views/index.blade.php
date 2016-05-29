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

    <section id="calculation">
        <div class="container">
            <div class="text-xl text-center">Заказ и расчет стоимости праздника</div>
            <hr>
            <form action="#" method="post">
                <div class="row control-type">
                    <div class="col-sm-6 col-sm-offset-3">
                        <select class="form-control input-lg">
                            <option value="">Выберите тип праздника</option>
                            <option value="1">Свадьба</option>
                            <option value="2">День рождения</option>
                            <option value="3">Банкет</option>
                        </select>
                    </div>
                </div>
                <div class="guests-number">
                    <div class="title">Количество гостей</div>
                    <div class="guests-number-choices">
                        <div>1-4</div>
                        <div>5-9</div>
                        <div>10-19</div>
                        <div>20-39</div>
                        <div>> 40</div>
                    </div>
                </div>
                <div class="control-details">
                    <div class="title text-center">Выберите дату и время для праздника</div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="date">Дата</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                    <input type="date" class="form-control input-lg" id="date" name="date" placeholder="Выберите дату">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="time">Дата</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                    <input type="time" class="form-control input-lg" id="time" name="time" placeholder="Выберите время">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="discuss_menu" type="checkbox"> Обсудить банкетное меню
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="представьтесь" class="form-control input-lg">
                            </div>
                            <div class="form-group">
                                <input type="text" name="contact" placeholder="ваш email или телефон" class="form-control input-lg">
                            </div>
                            <div class="form-group">
                                <textarea name="text" style="min-height: 100px;" class="form-control input-lg" placeholder="Если есть еще, что нам написать, пишите сюда в свободной форме"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-lg btn-primary">Отправить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

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