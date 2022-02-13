<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <title>Laravel 9 - Boilerplate</title>
</head>

<body>
    {{ $slot }}
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
