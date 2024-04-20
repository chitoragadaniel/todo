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
            <h3 class="text-2xl m-4">List of ongoing tasks</h3>
            <div class="w-1/4">
            @foreach($tasks as $task)
                @if(!$task->done)
                <div class="flex justify-between w-full">
                    <span class="m-1"> <a href="/{{ $task->id}}"> {{ $task->name }} </a> </span>
                    <form method="post" action="/{{$task->id}}/done">
                        @method('patch')
                        @csrf
                        <button class="submit"> Done </button>
                    </form>
                </div>
                @endif
            @endforeach
            </div>

            <h3 class="text-2xl mt-12 mb-4">List of tasks done</h3>
            <div class="w-1/4">
            @foreach($tasks as $task)
                @if($task->done)
                    <div class="flex justify-between w-full">
                        <span class="m-1"> <a href="/{{ $task->id}}"> {{ $task->name }} </a> </span>
                        <form method="post" action="/{{$task->id}}">
                            @method('delete')
                            @csrf
                            <button class="submit"> Remove </button>
                        </form>
                    </div>
                @endif
            @endforeach
            </div>

            <h3 class="text-2xl mt-10 mb-4">Add a new task</h3>
            <form method="post" action="/" class="flex flex-col">
                @csrf
                @method('PUT')
                <div>
                    <label>
                        Name
                        <input type="text" name="name" required  class="bg-black border-2 border-gray-300 rounded-md float-right">
                    </label>
                </div>
                <div class="mt-2">
                    <label>
                        Description
                        <input type="text" name="description" class="bg-black border-2 border-gray-300 rounded-md float-right">
                    </label>
                </div>
                <div class="mt-2">
                    <label>
                        Label
                        <input type="text" name="label" class="bg-black border-2 border-gray-300 rounded-md float-right">
                    </label>
                </div>
                <button type="submit" class="mt-2 border-2 border-gray-300 rounded-md w-16"> Add </button>
            </form>
    </body>
</html>
