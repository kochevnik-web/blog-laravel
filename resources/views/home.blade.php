<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home view</title>
</head>
<body>
    <h1>Hello, World!</h1>
    {{$var}} <br>
    {{$name}} <br>
    {{route('post',['id' => 3, 'slug' => 'test-2'])}}<br>
    {{route('admin.post',['id' => 5])}}
</body>
</html>