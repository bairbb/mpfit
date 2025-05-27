@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 class="mb-0">Заказ #{{ $order->id }}</h2>
        </div>

        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif

          <div class="mb-4">
            <h3>Информация о заказе</h3>
            <table class="table">
              <tr>
                <th>Статус:</th>
                <td>
                  <span class="badge {{ $order->status === 'completed' ? 'bg-success' : 'bg-primary' }}">
                    {{ $order->status === 'completed' ? 'Выполнен' : 'Новый' }}
                  </span>
                </td>
              </tr>
              <tr>
                <th>Дата создания:</th>
                <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
              </tr>
              <tr>
                <th>ФИО:</th>
                <td>{{ $order->full_name }}</td>
              </tr>
              <tr>
                <th>Комментарий:</th>
                <td>{{ $order->comment ?? 'Нет комментария' }}</td>
              </tr>
            </table>
          </div>

          <div class="mb-4">
            <h3>Информация о товаре</h3>
            <table class="table">
              <tr>
                <th>Товар:</th>
                <td>{{ $order->product->name }}</td>
              </tr>
              <tr>
                <th>Категория:</th>
                <td>{{ $order->product->category->name }}</td>
              </tr>
              <tr>
                <th>Цена:</th>
                <td>{{ number_format($order->product->price, 2) }} ₽</td>
              </tr>
              <tr>
                <th>Количество:</th>
                <td>{{ $order->quantity }}</td>
              </tr>
              <tr>
                <th>Итого:</th>
                <td>{{ number_format($order->product->price * $order->quantity, 2) }} ₽</td>
              </tr>
            </table>
          </div>

          @if($order->status === 'new')
            <form action="{{ route('orders.edit', $order) }}" method="POST" class="d-inline">
              @csrf
              @method('PATCH')
              <button type="submit" class="btn btn-success" onclick="return confirm('Отметить заказ как выполненный?')">
                Отметить как выполненный
              </button>
            </form>
          @endif

          <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад к списку заказов</a>
        </div>
      </div>
    </div>
  </div>
@endsection