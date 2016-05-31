<div class="headerable">
    <div class="title">Настройки Хидера</div>
    <div class="input-field col s12">
        <label for="header_title">Заголовок</label>
        <input class="validate" name="header_title" type="text" value="{{ isset($item) && $item->header->count() && $item->header->first()->title ? $item->header->first()->title : '' }}" id="header_title">
    </div>

    <div class="input-field file-field col s12">
        <div class="btn">
            <span>Фото</span>
            {!! Form::file('header_image') !!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate{{ $errors->has('header_image') ? ' invalid' : '' }}" type="text" placeholder="Выберите файл (1600 x 880)">
        </div>
    </div>

    @if (isset($item) && $item->header->count() && $item->header->first()->image)
        <div class="col s12">
            <div><img src="/images/medium/{{ $item->header->first()->img_url . $item->header->first()->image }}" alt="" /></div>
            <button class="btn btn-small red waves-effect waves-light" type="button" title="Удалить фото" onclick="deleteImage(this)" data-request-url="{{ route('headerable.delete') }}" data-model-class="{{ get_class($item) }}" data-model-id="{{ $item->id }}"><i class="material-icons">delete</i></button>
            <div class="preloader-wrapper small active preloader" style="display: none;"><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>
        </div>
    @endif
</div>