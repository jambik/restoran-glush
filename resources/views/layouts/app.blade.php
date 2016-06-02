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
    <header id="header" @yield('header_attributes')>
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="collapse navbar-collapse" id="navbar">
                <div class="logo-small">
                    <a href="{{ route('index') }}"><img src="{{ asset('img/logo-small.png') }}"></a>
                    <span>{{ $settings->phone }}</span>
                </div>
                <ul>
                    <li><a href="#" onclick="$('#calculation').show(); $('body').scrollTo($('#calculation'), 500)">ЗАБРОНИРОВАТЬ</a></li>
                    <li>
                        <a href="{{ route('catalog') }}">МЕНЮ</a>
                        @if ($categories)
                            <ul>
                                @foreach ($categories as $value)
                                    <li><a href="{{ route('catalog.category', $value->slug) }}">{{ $value->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li>
                        <a href="{{ route('page.show', 'meropriyatiya') }}">МЕРОПРИЯТИЯ</a>
                        @if ($eventsPages)
                            <ul>
                                @foreach ($eventsPages as $value)
                                    <li><a href="{{ route('page.show', $value->slug) }}">{{ $value->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li><a href="{{ route('page.show', 'detyam') }}">ДЕТЯМ</a></li>
                    <li><a href="{{ route('galleries') }}">ФОТОАЛЬБОМ</a></li>
                    <li><a href="{{ route('page.show', 'akcii') }}">АКЦИИ</a></li>
                    <li>
                        <a href="{{ route('page.show', 'o-nas') }}">О НАС</a>
                        @if ($aboutUsPages)
                            <ul>
                                @foreach ($aboutUsPages as $value)
                                    <li><a href="{{ route('page.show', $value->slug) }}">{{ $value->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li>
                        <a href="{{ route('articles') }}">СТАТЬИ</a>
                        @if ($mainArticles)
                            <ul>
                                @for ($i = 0; $i < ($mainArticles->count() < 4 ? $mainArticles->count() : 4); $i++)
                                    <li><a href="{{ route('articles.show', $mainArticles[$i]->slug) }}">{{ $mainArticles[$i]->name }}</a></li>
                                @endfor
                            </ul>
                        @endif
                    </li>
                </ul>
            </nav>
            <div class="fork-and-spoon"></div>
            <div class="slogan text-shadow-lg">@yield('slogan')</div>
            <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo-big.png') }}"></a></div>
            <div class="below-logo">
                @yield('below-logo')
            </div>
            <div class="phone-number"><span>{{ $settings->phone }}</span></div>
            <div class="more">
                <a href="#" onclick="$('body').scrollTo($('#below-header'), 500)">
                    <img src="{{ asset('img/icon-more.png') }}">
                </a>
            </div>
            <div class="below-more">
                @yield('below-more')
            </div>
            <div class="slider-controls"></div>
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
                        <li class="title"><a href="{{ route('catalog') }}">Меню</a></li>
                        @if ($categories)
                            @foreach ($categories as $value)
                                <li><a href="{{ route('catalog.category', $value->slug) }}">{{ $value->name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="{{ route('page.show', 'meropriyatiya') }}">Мероприятия</a></li>
                        @if ($eventsPages)
                            @foreach ($eventsPages as $value)
                                <li><a href="{{ route('page.show', $value->slug) }}">{{ $value->name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="{{ route('galleries') }}">Фотоальбом</a></li>
                        <li>
                            @if ($firstGallery)
                                @for ($i = 0; $i < ($firstGallery->photos->count() < 6 ? $firstGallery->photos->count() : 6); $i++)
                                    <a href="{{ route('galleries.show', $firstGallery->slug) }}"><img src="/images/small/{{ $firstGallery->photos[$i]->img_url . $firstGallery->photos[$i]->image }}" class="img-gallery"></a>
                                @endfor
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="{{ route('page.show', 'o-nas') }}">О нас</a></li>
                        @if ($aboutUsPages)
                            @foreach ($aboutUsPages as $value)
                                <li><a href="{{ route('page.show', $value->slug) }}">{{ $value->name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li class="title"><a href="{{ route('articles') }}">Статьи</a></li>
                        @if ($mainArticles)
                            @for ($i = 0; $i < ($mainArticles->count() < 4 ? $mainArticles->count() : 4); $i++)
                                <li><a href="{{ route('articles.show', $mainArticles[$i]->slug) }}">{{ $mainArticles[$i]->name }}</a></li>
                            @endfor
                        @endif
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