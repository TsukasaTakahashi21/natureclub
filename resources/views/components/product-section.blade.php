<div>
    <h3 class="mb-3 mt-5 text-canter">{{ $title }}</h3>
    <div class="row">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</div>