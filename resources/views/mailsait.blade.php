<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {!! $body !!}

    <img src="{{ $message->embed(url('assets/img/1.jpg')) }}" alt="">
</body>
</html>