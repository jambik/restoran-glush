@extends('layouts.app')

@section('title', 'Новости')

@section('content')
    <h1>Новости</h1>
    <hr>
    @if ($news->count())
        <div class="news-list">
            @foreach($news as $value)
                <div class="media">
                    <div class="media-left media-middle">
                        <div class="image"><a href="{{ route('news.show', $value->id) }}"><img src="{{ $value->image ? '/images/small/' . $value->img_url . $value->image : '/img/default.png' }}"></a></div>
                    </div>
                    <div class="media-body media-middle">
                        <div class="name"><a href="{{ route('news.show', $value->id) }}">{{ $value->title }}</a></div>
                        @if ($value->text)<p>{{ str_limit(strip_tags($value->text), 150, '...') }}</p>@endif
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-items">Раздел пока пуст</div>
    @endif

@endsection