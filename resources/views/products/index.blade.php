@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Цена</th>
      <th scope="col">Категория</th>
      <th scope="col">Действия</th>
      <th scope="col">Заказать</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }} руб</td>
        <td>{{ $product->category->name }}</td>
        <td>
          <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-success">Посмотреть</a>
          <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">Редактировать</a>
          <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить продукт?')">Удалить</button>
          </form>
        </td>
        <td>
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
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection