<div class="col-md-3 mb-4 text-center p-2">
    <img src="{{ asset('storage/' .$product->images->first()->image_path) }}" alt="{{ $product->name }}" class="img-fluid mb-2">
    <div class="product-info">
        <h5 class="mb-1">{{ $product->name }}</h5>
        <p class="fw-bold">￥{{ number_format($product->price) }}</p>
    </div>
</div>