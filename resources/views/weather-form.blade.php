<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Form</title>
</head>
<body>
    <form action="{{ url('/weather-data') }}" method="POST">
        @csrf
        <label for="location">Введите локацию</label>
        <input type="text" id="location" name="location" required>
        <button type="submit">Получить погоду</button>
    </form>
</body>
</html>