@extends('layouts.app')

@section('title', $item->name)

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('galleries') }}">Фотоальбомы</a></li>
        <li><a href="{{ route('galleries.show', $item->slug) }}">{{ $item->name }}</a></li>
    </ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            <div><a href="{{ route('galleries') }}"><i class="fa fa-chevron-left"></i> все альбомы</a></div>
            <h1>{{ $item->name }}</h1>
            <hr>
            @if ($item->photos->count())
                <div class="gallery-photos">
                    @foreach ($item->photos as $val)
                        <a class="popup-gallery" title="{{ $val->name }}" href="/images/original/{{ $val->img_url . $val->image }}"><img src="/images/small/{{ $val->img_url . $val->image }}" class="img-thumbnail" alt="{{ $val->name }}"></a>
                    @endforeach
                </div>
            @else
                <div class="no-items">Раздел пока пуст</div>
            @endif
        </div>
    </section>

    @include('partials._calculation')
@endsection