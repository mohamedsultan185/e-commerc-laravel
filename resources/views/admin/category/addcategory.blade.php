<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" name="name" required><br>
        <button type="submit">Add Category</button>
    </form>
</body>
</html>
