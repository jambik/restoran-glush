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
                    <li><a href="{{ route('catalog') }}">МЕНЮ</a></li>
                    <li><a href="{{ route('page.show', 'bankety') }}">МЕРОПРИЯТИЯ</a></li>
                    <li><a href="#">ДЕТЯМ</a></li>
                    <li><a href="#">ФОТОАЛЬБОМ</a></li>
                    <li><a href="#">АКЦИИ</a></li>
                    <li><a href="#">О НАС</a></li>
                    <li><a href="#">СТАТЬИ</a></li>
                </ul>
            </nav>
            <div class="fork-and-spoon"></div>
            <div class="slogan text-shadow-lg">Банкеты в кафе</div>
            <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}"></a></div>
            <div class="below-logo">
                <ul>
                    <li><a href="#">Праздники</a></li>
                    <li><a href="#">Свадебные банкеты</a></li>
                    <li><a href="#">Уютное кафе</a></li>
                </ul>
            </div>
            <div class="phone-number"><span>+7 (900) 571-55-77</span></div>
            <div class="more">
                <a href="#" onclick="$('body').scrollTo($('#below-header'), 500)">
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

    <div id="below-header"></div>

    @yield('content')

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