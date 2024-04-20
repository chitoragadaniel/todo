@props(['tasks', 'method'])

@if($tasks->count())
    <h3 class="text-2xl m-4">{{ $slot }}</h3>
    <div class="w-1/4">
        @foreach($tasks as $task)
            <div class="flex justify-between w-full">
                <span class="m-1"> <a href="/{{ $task->id}}"> {{ $task->name }} </a> </span>
                <form method="post" action="/{{$task->id}}">
                    @csrf
                    @method($method)
                    <button class="submit"> {{$button}}</button>
                </form>
            </div>
        @endforeach
    </div>
@endif
