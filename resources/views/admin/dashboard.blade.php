@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
<div class="container py-4">
    <x-product-section title="New Items" :products="$newItems" />
    <x-product-section title="Sweat" :products="$sweat" />
    <x-product-section title="T-shirt" :products="$tshirt" />
    <x-product-section title="Cap" :products="$cap" />
</div>
@stop