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
          <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-success">Посмотреть</a>
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить продукт?')">Удалить</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection