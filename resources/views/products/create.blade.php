@extends('layouts.app')

@section('content')
  <h2 class="mb-5">Создание товара</h2>
  <form action={{ route('products.store') }} method="POST">
    @csrf

    <div class="mb-3 row">
      <label for="name" class="col-4 col-form-label">Название</label>
      <div class="col-8">
        <input
          type="text"
          class="form-control"
          name="name"
          id="name"
          placeholder="Введите название"
          value="{{ old('name') }}"
        />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="description" class="col-4 col-form-label">Описание</label>
      <div class="col-8">
        <textarea
          class="form-control"
          name="description"
          id="description"
          placeholder="Введите описание">{{ old('description') }}</textarea>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="price" class="col-4 col-form-label">Цена</label>
      <div class="col-8">
        <input type="number" 
              step="0.01" 
              class="form-control" 
              name="price" 
              id="price" 
              placeholder="Введите цену"
              value="{{ old('price') }}"
        />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="category_id" class="col-4 col-form-label">Категория</label>
      <div class="col-8">
        <select class="form-control" name="category_id" id="category_id">
          <option value="">Выберите категорию</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" 
              {{ old('category_id') == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <div class="offset-sm-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Отмена</a>
      </div>
    </div>
  </form>
@endsection