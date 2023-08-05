<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories List</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a>
                <form method="POST" action="{{ route('categories.destroy', ['category' => $category->id]) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
