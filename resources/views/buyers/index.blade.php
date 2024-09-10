<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список продавцов</title>
    <!-- Подключение Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($buyers as $buyer)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Имя продавца: {{ $buyer->name }}</h5>
                            <p class="card-text">Страна: {{ $buyer->country }}</p>
                            
                            @if ($buyer->products->isNotEmpty())
                                <h6>Товары:</h6>
                                <ul class="list-group list-group-flush">
                                    @foreach ($buyer->products as $product)
                                        <li class="list-group-item">{{ $product->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">Нет доступных товаров</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JavaScript Bundle (необязательно) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
