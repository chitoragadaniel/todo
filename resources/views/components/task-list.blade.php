@props(['tasks', 'method'])

@if($tasks->count())
    <h3 class="text-2xl mt-10">{{ $slot }}</h3>
    <div class="w-1/4">
        @foreach($tasks as $task)
            <div class="flex justify-between w-full mt-1">
                <span class="m-1"> <a href="/{{ $task->id}}"> {{ $task->name }} </a> </span>
                <div class="flex">
                    @if($task->label)
                        <span class="mr-3 text-red-500">#{{$task->label}}</span>
                    @endif
                    <form method="post" action="/{{$task->id}}">
                        @csrf
                        @method($method)
                        <x-form.button>{{$button}}</x-form.button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endif
