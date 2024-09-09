<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" class="form-control" value="{{ $product->description }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" class="form-control" value="{{ $product->status }}" required>
        </div>

        <div class="form-group">
            <label for="buyer">Buyer:</label>
            <input type="text" id="buyer" name="buyer" class="form-control" value="{{ $product->buyer }}" required>
        </div>

        <div class="form-group">
            <label for="seller">Seller:</label>
            <input type="text" id="seller" name="seller" class="form-control" value="{{ $product->seller }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
