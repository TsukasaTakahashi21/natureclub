@extends('adminlte::page')
@section('title', '商品詳細')

@section('content')
<div class="container py-5">
  <div class="row">
    <!-- 商品画像 -->
    <div class="col-md-6">
      <!-- メイン画像 -->
      <img id="mainImage" src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="img-fluid mb-3 border">
      <!-- サブ画像 -->
      <div class="d-flex justify-content-between flex-wrap">
        @foreach ($product->images as $image)
        <img src="{{ asset('storage/' . $image->image_path) }}"
          alt="{{ $product->name }}"
          class="img-thumbnail mb-2"
          style="width: 100px; height: auto;"
          onclick="document.getElementById('mainImage').src = this.src;">
        @endforeach
      </div>
    </div>

    <!-- 商品詳細 -->
    <div class="col-md-6 d-flex flex-column">
      <h4>{{ $product->name }}</h4>
      <div class="d-flex  align-items-baseline">
        <h2 class="mt-2 mr-2">￥{{ number_format($product->price) }}</h2>
        <small class="text-muted">税込</small>
      </div>
      <div class="mt-4">
        <h5>SIZE：S.M.L.XL</h5>
        <ul class="list-unstyled">
          <li>S 着丈66 / 身幅52 / 肩幅47</li>
          <li>M 着丈69 / 身幅55 / 肩幅50</li>
          <li>L 着丈72 / 身幅58 / 肩幅53</li>
          <li>XL 着丈75 / 身幅61 / 肩幅56</li>
        </ul>
      </div>

      <!-- カート -->
      <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#cartModal">
        <i class="fas fa-shopping-cart"></i>カートに追加
      </button>
      <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true" aria-labelledby="cartModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="#" method="post">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">{{ $product->name }}をカートに追加</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる"></button>
              </div>
              <div class="modal-body">
                <!-- サイズ選択 -->
                <div class="mb-3">
                  <label for="size" class="form-label">サイズ</label>
                  <select name="size" id="size" class="form-control" required>
                    <option value="">選択してください</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                  </select>
                </div>
                <!-- 数量選択 -->
                <div class="mb-3">
                  <label for="quantity" class="form-label">数量</label>
                  <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">カートに追加する</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop