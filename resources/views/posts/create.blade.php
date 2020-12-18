<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Create</title>
</head>
<body>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <button type="summit">Submit</button>
    </form>
</body>
</html>