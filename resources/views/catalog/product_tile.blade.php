<a name="product-{{ $product->id }}">
<div class="col-md-6 product">
    <div class="img">
        @if ($product->image)
            <a class="popup-product" title="{{ $product->name }}" href="/images/original/{{ $product->img_url . $product->image }}">
                <img src="/images/large/{{ $product->img_url . $product->image }}" class="img-responsive">
            </a>
        @else
            <img src="/img/default.png" class="img-responsive">
        @endif
    </div>
    <div class="name"><a href="{{ route('catalog.product', $product->slug) }}">{{ $product->name }}</a></div>
    <div class="description">{{ $product->brief }}</div>
    <div class="details">
        @if ($product->weight)<span class="weight">Вес: <span>{{ $product->weight }} г.</span></span>@endif
        @if ($product->price)<span class="price">Цена: <span>{{ $product->price }} руб.</span></span>@endif
    </div>
</div>