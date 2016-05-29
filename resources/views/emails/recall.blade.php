@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Отзыв',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <hr />
    <p><strong>Данные от пользователя:</strong></p>
    <p>Имя: {{ $input['name'] }}</p>
    <p>Контактные данные: {{ $input['contact'] }}</p>
    <p>Сообщение: {{ $input['text'] }}</p>

    @include('beautymail::templates.sunny.contentEnd')

@endsection