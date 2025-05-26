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
      <h6 class="card-subtitle mb-2">Цена</h6>
      <p class="card-text">{{ $product->price }} руб</p>
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
      <form action="{{ route('orders.create') }}" method="GET" class="mb-3">
        @csrf
        <input type="hidden" name="product" value="{{ $product }}">
        
        <div class="row">
          <div class="col-auto">
            <input type="number" 
                   class="form-control" 
                   name="quantity" 
                   id="quantity" 
                   value="{{ old('quantity', 1) }}" 
                   min="1" 
                   style="width: 80px"
                   required>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-sm btn-info">Заказать</button>
          </div>
        </div>
      </form>
    </div>
    <div class="card-body">
      <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">Редактировать</a>
      <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить продукт?')">Удалить</button>
      </form>
    </div>
  </div>
@endsection