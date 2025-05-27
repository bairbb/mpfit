@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2 class="mb-0">Список заказов</h2>
        </div>

        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>№ заказа</th>
                  <th>Дата создания</th>
                  <th>ФИО покупателя</th>
                  <th>Статус</th>
                  <th>Итоговая цена</th>
                  <th>Действия</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($orders as $order)
                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
                    <td>{{ $order->full_name }}</td>
                    <td>
                      <span class="badge {{ $order->status === 'completed' ? 'bg-success' : 'bg-primary' }}">
                        {{ $order->status === 'completed' ? 'Выполнен' : 'Новый' }}
                      </span>
                    </td>
                    <td>{{ number_format($order->product->price * $order->quantity, 2) }} ₽</td>
                    <td>
                      <a href="{{ route('orders.show', $order) }}" 
                        class="btn btn-sm btn-info">
                        Просмотр
                      </a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center">Заказы отсутствуют</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
