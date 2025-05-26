<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test mpfit</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
      {{-- <a class="navbar-brand" href="{{ route('products.index') }}">Магазин</a> --}}
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('products.index') }}">Товары</a>
        {{-- <a class="nav-link" href="{{ route('orders.index') }}">Заказы</a> --}}
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>