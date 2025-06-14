@extends('adminlte::page')

@section('title', '新規作成')

@section('content_header')
<h1 class="mb-4 text-center mt-2">商品追加</h1>
@stop


@section('content')
<div class="container" style="max-width: 500px;">
  <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
    @csrf
    <div class="mb-4">
      <label for="name" class="form-label fw-semibold">商品名</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
      @error('name')
      <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-4">
      <label for="price" class="form-label fw-semibold">値段</label>
      <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
      @error('price')
      <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-4">
      <select name="category_id" id="category_id" class="form-select w-100 p-2"">
        <option value="">カテゴリーを選択</option>
          @foreach ($categories as $category)
            <option value=" {{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      @error('category_id')
      <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-4">
      <label for="images" class="form-label fw-semibold">商品画像</label>
      <input type="file" name="images[]" id="images" multiple class="form-control p-1">
      @error('images')
      <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
      @error('images.*')
      <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-outline-primary w-100 fw-semibold rounded-3">登録</button>
  </form>
</div>
@stop