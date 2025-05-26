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
      <h6 class="card-subtitle mb-2">Описание</h6>
      <p class="card-text">{{ $product->description }}</p>
    </div>
    <div class="card-body">
      <h6 class="card-subtitle mb-2">Категория</h6>
      <p class="card-text">{{ $product->category->name }}</p>
    </div>
    <div class="card-body">
      <a href="#" class="btn btn-sm btn-primary">Редактировать</a>
      <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
      </form>
    </div>
  </div>
@endsection