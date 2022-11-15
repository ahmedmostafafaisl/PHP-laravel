<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    welcome my name is {{ $name }} and i have ={{ $age }} years old and my adderess is
    {{ $address }} and my friends are @foreach ($friends as $friend)
        {{ $friend }}
    @endforeach
</body>

</html>
