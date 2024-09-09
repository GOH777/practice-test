<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Select status:</label>
            <select id="status" name="status" class="form-control" required>
                <option value="on_the_way">On the way</option>
                <option value="on_storage">On storage</option>
                <option value="sold">Sold</option>
            </select>
        </div>

        <div class="form-group">
            <label for="buyer">Buyer:</label>
            <input type="text" id="buyer" name="buyer" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="seller">Seller:</label>
            <input type="text" id="seller" name="seller" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
