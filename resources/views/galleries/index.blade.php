@extends('layouts.app')

@section('onload') onload="$('body').scrollTo($('#below-header'), 1000)" @endsection

@section('title', 'Фотогалереи')

@section('header_attributes') @if (isset($page) && $page->header->count() && $page->header->first()->image) style="background-image: url('/images/original/{{ $page->header->first()->img_url . $page->header->first()->image }}')" @endif @endsection
@section('slogan') @if (isset($page) && $page->header->count() && $page->header->first()->title) {{ $page->header->first()->title }} @endif @endsection

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('galleries') }}">Фотоальбомы</a></li>
    </ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            <h1>Фотоальбом</h1>
            <hr>
            <div class="galleries-list">
                @if ($galleries->count())
                    @foreach($galleries as $gallery)
                        <div class="item media category">
                            <div class="media-left media-middle">
                                <div class="image"><a href="{{ url('/galleries/' . $gallery->slug) }}"><img src="{{ $gallery->image ? '/images/small/' . $gallery->img_url . $gallery->image : '/img/default.png' }}"></a></div>
                            </div>
                            <div class="media-body media-middle">
                                <div class="name"><a href="{{ url('/galleries/' . $gallery->slug) }}">{{ $gallery->name }}</a></div>
                                @if ($gallery->text)<p>{{ str_limit($gallery->text, 150, '...') }}</p>@endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="no-items">Раздел пока пуст</div>
                @endif
            </div>
        </div>
    </section>

    @include('partials._calculation')
@endsection