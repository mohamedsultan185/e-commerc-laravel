<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Category Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required><br>
        <button type="submit">Update Category</button>
    </form>
</body>
</html>
