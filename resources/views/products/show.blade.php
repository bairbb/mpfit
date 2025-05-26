@extends('layouts.app')

@section('content')
  <div class="mb-3">
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
      Назад к списку
    </a>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ $product->name }}</h4>
    </div>
    <div class="card-body">
      <h6 class="card-subtitle text-muted">Описание</h6>
      <p class="card-text">{{ $product->description }}</p>
      <h6 class="card-subtitle text-muted">Категория</h6>
      <p class="card-text">{{ $product->category->name }}</p>
    </div>
    <div class="card-body">
      <a href="#" class="card-link">Редактировать</a>
      <a href="#" class="card-link">Удалить</a>
    </div>
  </div>
@endsection