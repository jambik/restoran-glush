@extends('admin.page', ['title' => "Фотогалереи"])

@section('content')
	<h4 class="center">Редактировать</h4>
	<div class="row">
		<div class="col l6 offset-l3 m8 offset-m2">
            <ul class="tabs z-depth-1 hoverable">
                <li class="tab col s6"><a href="#tab1">Основные свойства</a></li>
                <li class="tab col s6"><a href="#tab2">Фотографии</a></li>
            </ul>
            <div>&nbsp;</div>
			<div id="tab1" class="row">
				{!! Form::model($item, ['url' => route('admin.galleries.update', $item->id), 'method' => 'PUT', 'files' => true]) !!}
					@include('admin.galleries.form', ['submitButtonText' => 'Обновить'])
				{!! Form::close() !!}
			</div>

			<div id="tab2" class="row">
                @include('admin.partials._photoable')
			</div>
		</div>
	</div>
@endsection
