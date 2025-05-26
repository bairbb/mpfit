@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>Оформление заказа</h2>
    </div>
    <div class="card-body">
      <div class="mb-4">
        <h5>Информация о товаре:</h5>
        <p><strong>Название:</strong> {{ $product->name }}</p>
        <p><strong>Цена за единицу:</strong> {{ $product->price }} руб.</p>
        <p><strong>Количество:</strong> {{ $quantity }} шт.</p>
        <p><strong>Итого:</strong> {{ $product->price * $quantity }} руб.</p>
      </div>

      <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="quantity" value="{{ $quantity }}">

        <div class="mb-3 row">
          <label for="lastname" class="col-4 col-form-label">Фамилия</label>
          <div class="col-8">
            <input type="text" 
                   class="form-control @error('lastname') is-invalid @enderror" 
                   name="lastname" 
                   id="lastname" 
                   value="{{ old('lastname') }}" 
                   required>
            @error('lastname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3 row">
          <label for="name" class="col-4 col-form-label">Имя</label>
          <div class="col-8">
            <input type="text" 
                   class="form-control @error('name') is-invalid @enderror" 
                   name="name" 
                   id="name" 
                   value="{{ old('name') }}" 
                   required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3 row">
          <label for="surname" class="col-4 col-form-label">Отчество</label>
          <div class="col-8">
            <input type="text" 
                   class="form-control @error('surname') is-invalid @enderror" 
                   name="surname" 
                   id="surname" 
                   value="{{ old('surname') }}" 
                   required>
            @error('surname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3 row">
          <label for="comment" class="col-4 col-form-label">Комментарий</label>
          <div class="col-8">
            <textarea class="form-control @error('comment') is-invalid @enderror" 
                      name="comment" 
                      id="comment" 
                      rows="3">{{ old('comment') }}</textarea>
            @error('comment')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3 row">
          <div class="offset-sm-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Подтвердить заказ</button>
            {{-- <a href="{{ route('products.show', $product) }}" class="btn btn-secondary">Отмена</a> --}}
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection