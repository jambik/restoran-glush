<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/app.bundle.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script src="{{ asset('/js/app.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('header_scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>@yield('title')</title>
</head>
<body class="body">

<div class="main-container">
    <header>
        <div class="container-fluid">
            <nav>
                <ul>
                    <li><a href="#">ЗАБРОНИРОВАТЬ</a></li>
                    <li><a href="#">МЕНЮ</a></li>
                    <li><a href="#">МЕРОПРИЯТИЯ</a></li>
                    <li><a href="#">ДЕТЯМ</a></li>
                    <li><a href="#">ФОТОАЛЬБОМ</a></li>
                    <li><a href="#">АКЦИИ</a></li>
                    <li><a href="#">О НАС</a></li>
                    <li><a href="#">СТАТЬИ</a></li>
                </ul>
            </nav>
            <div class="fork-and-spoon"></div>
            <div class="slogan text-shadow-lg">Банкеты в кафе</div>
            <div class="logo"><img src="{{ asset('img/logo.png') }}"></div>
            <div class="below-logo">
                <ul>
                    <li><a href="#">Праздники</a></li>
                    <li><a href="#">Свадебные банкеты</a></li>
                    <li><a href="#">Уютное кафе</a></li>
                </ul>
            </div>
            <div class="phone-number"><span>+7 (900) 571-55-77</span></div>
            <div class="more">
                <a href="#" onclick="$('body').scrollTo($('#about-us'), 500)">
                    <img src="{{ asset('img/icon-more.png') }}">
                </a>
            </div>
            <div class="below-more">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Меню</a></li>
                    <li><a href="#">Завтраки</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <section id="categories">
        <div class="container">
            <div class="text-xl text-center">Наше меню</div>
            <hr>
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-1.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Завтраки</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-2.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Первые блюда</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-3.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Блюда на гриле</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-4.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Гарниры и соусы</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-5.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Салаты</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
                <div class="col-md-6 category">
                    <div class="img"><img src="{{ asset('img/category-6.jpg') }}" class="img-responsive"></div>
                    <div class="name"><a href="#">Десерты</a></div>
                    <div class="description">Каши, яишницы или омлет, оладьи и многое другое</div>
                    <div class="more"><a href="#">подробнее</a></div>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <div class="text-xl text-center">Завтраки в глуши</div>
            <hr>
            <div class="row">
                <div class="col-md-6 product">
                    <div class="img"><img src="{{ asset('img/product-1.jpg') }}" class="img-responsive"></div>
                    <div class="name">Каша на выбор</div>
                    <div class="description">Геркулес, манка с маслом и джемом на выбор</div>
                    <div class="details">
                        <span class="weight">Вес: <span>150 г.</span></span>
                        <span class="price">Цена: <span>150 руб.</span></span>
                    </div>
                </div>
                <div class="col-md-6 product">
                    <div class="img"><img src="{{ asset('img/product-2.jpg') }}" class="img-responsive"></div>
                    <div class="name">Яичница (омлет)</div>
                    <div class="description">с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр</div>
                    <div class="details">
                        <span class="weight">Вес: <span>180 г.</span></span>
                        <span class="price">Цена: <span>250 руб.</span></span>
                    </div>
                </div>
                <div class="col-md-6 product">
                    <div class="img"><img src="{{ asset('img/product-3.jpg') }}" class="img-responsive"></div>
                    <div class="name">Оладьи</div>
                    <div class="description">сметана, мёд, варенье, шоколад, сгущенка</div>
                    <div class="details">
                        <span class="weight">Вес: <span>200 г.</span></span>
                        <span class="price">Цена: <span>120 руб.</span></span>
                    </div>
                </div>
                <div class="col-md-6 product">
                    <div class="img"><img src="{{ asset('img/product-2.jpg') }}" class="img-responsive"></div>
                    <div class="name">Яичница (омлет)</div>
                    <div class="description">с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр</div>
                    <div class="details">
                        <span class="weight">Вес: <span>150 г.</span></span>
                        <span class="price">Цена: <span>150 руб.</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <h1 class="text-center">Банкеты</h1>
            <p>&nbsp;</p>
            <p class="lead text-uppercase text-danger"><strong>Банкетное меню</strong></p>
            <p>Меню для Вашего банкета будет разработано нашими специалистами с учетом всех Ваших пожеланий.</p>
            <p>&nbsp;</p>
            <p class="lead text-uppercase text-danger"><strong>Аренда кафе</strong></p>
            <p>Стоимость аренды ресторана для закрытого мероприятия варьируется и зависит от многих факторов, таких как: сезонность, день недели и прочее.</p>
            <p>&nbsp;</p>
            <p class="lead text-uppercase text-danger"><strong>Медиа и музыкальное сопровождение</strong></p>
            <p>В нашем ресторане Вас ждет живая музыка. Каждый вечер наше музыкальное трио исполняет для Вас лучшие российские хиты и авторские песни. Их репертуар тщательно отобран и проверен временем.</p>
            <p>Основной зал оснащен аудио-проигрывателем и проектором с большим экраном. В зале - бесплатный WiFi.</p>
            <p>Любые технические вопросы, музыкальные предпочтения и пожелания по дизайнерскому оформлению залов ресторана для закрытых мероприятий Вы можете обсудить с нашими менеджерами. Унас огромный опыт в организации праздников и деловых встреч, как в московском ресторанном комплексе "Экспедиция", так и в самых удаленных и прекрасных уголках нашей Родины!</p>
            <p>&nbsp;</p>
        </div>
    </section>

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

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-1.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”. Доставка из “ПловХаус” всегда  быстро и очень вкусно. Спасибо вам большое.</p>
                        <div>Владимир Сергеев - <cite>12.02.2016</cite></div>
                    </blockquote>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-2.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”. Доставка из “ПловХаус” всегда  быстро и очень вкусно. Спасибо вам большое.</p>
                        <div>Владимир Сергеев - <cite>12.02.2016</cite></div>
                    </blockquote>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-3.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”. Доставка из “ПловХаус” всегда  быстро и очень вкусно. Спасибо вам большое.</p>
                        <div>Владимир Сергеев - <cite>12.02.2016</cite></div>
                    </blockquote>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-lg btn-danger">Оставить свой отзыв</a>
            </div>
        </div>
    </section>

    <section id="map">
        <img src="{{ asset('img/map.jpg') }}" class="img-responsive">
    </section>

    <footer>
        <div class="container">
            <hr class="hidden-xs">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <ul>
                        <li class="title"><a href="#">Меню</a></li>
                        <li><a href="#">Завтраки</a></li>
                        <li><a href="#">Первые блюда</a></li>
                        <li><a href="#">Блюда на гриле</a></li>
                        <li><a href="#">Гарниры и соусы</a></li>
                        <li><a href="#">Салаты</a></li>
                        <li><a href="#">Закуски</a></li>
                        <li><a href="#">Десерты</a></li>
                        <li><a href="#">Детское меню</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="#">Мероприятия</a></li>
                        <li><a href="#">Свадьбы</a></li>
                        <li><a href="#">Дни рождения</a></li>
                        <li><a href="#">Детские праздники</a></li>
                        <li><a href="#">Корпоративы</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="#">Фотоальбом</a></li>
                        <li><a href="#"><img src="{{ asset('img/gallery.jpg') }}" class="img-responsive"></a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="#">О нас</a></li>
                        <li><a href="#">Кто мы</a></li>
                        <li><a href="#">Наши окрестности</a></li>
                        <li><a href="#">Мы в Этномире</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="#">Статьи</a></li>
                        <li><a href="#">Лесной лабиринт "Дерби"</a></li>
                        <li><a href="#">О комплексе Этномир</a></li>
                        <li><a href="#">Анонсы фотоальбома</a></li>
                        <li><a href="#">Наши продукты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Сделано в jeny-art
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('img/icon-metrika.png') }}">
                    Телефон: 8 (495) 922-18-80 Copyright © 2016 www.restoran-glush.ru
                </div>
            </div>
        </div>
    </section>
</div>

@include('partials._callback')
@include('partials._flash')
@include('partials._metrika')

@yield('footer_scripts')

</body>
</html>