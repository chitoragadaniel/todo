<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black font-sans flex flex-col items-center m-40 text-gray-300 ">
<h1 class="text-4xl m-8">Todo App </h1>
    {{ $slot }}
</body>
</html>
