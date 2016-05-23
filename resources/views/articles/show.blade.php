@extends('layouts.app')

@section('title', $item->title ? $item->title : $item->name)

@section('content')
    <div><a href="{{ route('articles') }}"><i class="fa fa-chevron-left"></i> все статьи</a></div>
    <h1>{{ $item->name }}</h1>
    {!! $item->text !!}
@endsection