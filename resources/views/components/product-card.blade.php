<div class="col-md-3 mb-4 p-2">
    <a href="{{ route('admin.products.show', $product->id) }}">
        <img src="{{ asset('storage/' .$product->images->first()->image_path) }}" alt="{{ $product->name }}" class="img-fluid mb-2">
        <div class="product-info">
            <h5 class="mb-1">{{ $product->name }}</h5>
            <p class="fw-bold">￥{{ number_format($product->price) }}</p>
        </div>
    </a>
</div>