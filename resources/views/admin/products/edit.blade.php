@extends('admin.page', ['title' => "Продукты"])

@section('content')
	<h4 class="center">Редактировать</h4>
	<div class="row">
		<div class="col l8 offset-l2 m12">
            <ul class="tabs z-depth-1 hoverable">
                <li class="tab col s6"><a href="#tab1">Основные свойства</a></li>
                <li class="tab col s6"><a href="#tab2">Фотографии</a></li>
            </ul>
            <div>&nbsp;</div>
			<div id="tab1" class="row">
				{!! Form::model($item, ['url' => route('admin.products.update', $item->id), 'method' => 'PUT', 'files' => true]) !!}
					@include('admin.products.form', ['submitButtonText' => 'Обновить'])
				{!! Form::close() !!}
			</div>

			<div id="tab2" class="row">
                @include('admin.partials._photoable')
			</div>
		</div>
	</div>
@endsection
