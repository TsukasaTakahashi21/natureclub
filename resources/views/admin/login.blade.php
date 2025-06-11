@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
    <h2 class="mb-4 text-center">ログイン</h2>
    <form action="{{ route('admin.login') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">メールアドレス</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス" />
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">パスワード</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="パスワード" />
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary w-100">ログイン</button>
    </form>
  </div>
  @endsection