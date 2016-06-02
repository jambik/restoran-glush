<div class="container-fluid" style="background: #fff; max-width: 800px; padding: 15px;">
    <h1>{{ $product->name }}</h1>
    <div class="row product">
        <div class="col-sm-7 images">
            @if ($product->image)
                <img src="/images/large/{{ $product->img_url . $product->image }}" class="img img-responsive" alt="{{ $product->name }}">
            @else
                <img src="/img/default.png" class="img img-responsive">
            @endif

            @if ($product->photos->count())
                <p class="photos">
                    @foreach ($product->photos as $val)
                        <a class="popup-gallery" title="{{ $val->name }}" href="/images/original/{{ $val->img_url . $val->image }}"><img src="/images/small/{{ $val->img_url . $val->image }}" class="photo" alt="{{ $val->name }}"></a>
                    @endforeach
                </p>
            @endif
        </div>
        <div class="col-sm-5 info">
            <p class="description">{{ $product->brief }}</p>
            <p class="details">
                @if ($product->weight)<span class="weight">Вес: <span>{{ $product->weight }} г.</span></span>@endif
                @if ($product->price)<span class="price">Цена: <span>{{ $product->price }} руб.</span></span>@endif
            </p>
        </div>
    </div>
</div>