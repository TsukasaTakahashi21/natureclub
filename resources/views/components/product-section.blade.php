<div>
    <h3 class="mb-2 mt-2 text-center">{{ $title }}</h3>
    <div class="row">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</div>