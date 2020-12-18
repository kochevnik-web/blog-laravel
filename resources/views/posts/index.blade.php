<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Index</title>
</head>
<body>
    <h1>Список постов</h1>
    <ul>
        <li>
            <a href="{{ route('posts.show', ['id' => 1]) }}">Post 1</a> | 
            <a href="{{ route('posts.edit', ['id' => 1]) }}">EDIT</a> | 
            <form method="post" action="{{ route('posts.destroy', ['id' => 1]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['id' => 2]) }}">Post 2</a> | 
            <a href="{{ route('posts.edit', ['id' => 2]) }}">EDIT</a> | 
            <form method="post" action="{{ route('posts.destroy', ['id' => 2]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['id' => 3]) }}">Post 3</a> | 
            <a href="{{ route('posts.edit', ['id' => 3]) }}">EDIT</a> | 
            <form method="post" action="{{ route('posts.destroy', ['id' => 3]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </li>
    </ul>
</body>
</html>