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
    <h3 class="text-2xl m-4">Name: {{ $task->name}}</h3>
    @if($task->label)
        <span> Label: {{$task->label}}</span>
    @endif
    @if($task->description)
        <p>{{$task->description}}</p>
    @endif
</body>
</html>
