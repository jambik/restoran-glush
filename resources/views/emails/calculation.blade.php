@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Заказ и расчет стоимости праздника',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <hr />
    <p><strong>Данные от пользователя:</strong></p>
    <p>Имя: {{ $input['name'] }}</p>
    <p>Контактные данные: {{ $input['contact'] }}</p>
    <p>Сообщение: {{ $input['text'] }}</p>
    <hr />
    <p>Тип праздника: {{ $input['type'] }}</p>
    <p>Количество гостей: {{ $input['number'] }}</p>
    <p>Дата праздника: {{ $input['date'] }}</p>
    <p>Время праздника: {{ $input['time'] }}</p>
    @if (isset($input['discuss_menu']))<p>Обсудить банкетное меню: ДА</p>@endif

    @include('beautymail::templates.sunny.contentEnd')

@endsection