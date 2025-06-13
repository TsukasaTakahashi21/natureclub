@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ダッシュボード</h1>
@stop

@section('content')
<div class="container py-4">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4 text-center">
            @if($product->images->isNotEmpty())
            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                alt="{{ $product->name }}"
                class="img-fluid mb-2"
                style="max-height: 200px; object-fit: cover; width: 100%;">
            @endif
            <div class="product-info">
                <h5 class="mb-1">{{ $product->name }}</h5>
                <p class="fw-bold mb-0">¥{{ number_format($product->price) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop