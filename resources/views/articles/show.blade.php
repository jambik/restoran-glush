@extends('layouts.app')

@section('title', $item->title ? $item->title : $item->name)

@section('header_attributes') @if (isset($page) && $page->header->count() && $page->header->first()->image) style="background-image: url('/images/original/{{ $page->header->first()->img_url . $page->header->first()->image }}')" @endif @endsection
@section('slogan') @if (isset($page) && $page->header->count() && $page->header->first()->title) {{ $page->header->first()->title }} @endif @endsection

@section('below-more')
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('articles') }}">Статьи</a></li>
        <li><a href="{{ route('articles.show', $item->slug) }}">{{ $item->name }}</a></li>
    </ul>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            <div><a href="{{ route('articles') }}"><i class="fa fa-chevron-left"></i> все статьи</a></div>
            <h1>{{ $item->name }}</h1>
            {!! $item->text !!}
        </div>
    </section>

    @include('partials._calculation')
@endsection