<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
</head>
<body>
    <form action="{{ route('contact') }}" method="post">
        {{-- csrf_field() --}}
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>