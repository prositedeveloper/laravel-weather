<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Data</title>
</head>
<body>
    <h1>Погода в {{ $location }}</h1>
    <p>Температура {{ $celsius }}</p>
    <p>Температура {{ $fahrenheit }}</p>
    <a href="{{ url('/weather-form') }}">Назад</a>
</body>
</html>