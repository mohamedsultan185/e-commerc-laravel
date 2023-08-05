<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .product-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .product-image {
            max-height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Products List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="product-card">
                        @if ($product->image)
                            <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" class="product-image mb-3">
                        @endif
                        <h3 class="mb-3">{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p class="font-weight-bold">Price: ${{ $product->price }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <!-- Add Bootstrap JS and jQuery links here (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>
