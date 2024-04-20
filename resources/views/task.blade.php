<x-layout>
    <h3 class="text-2xl mb-2">Task</h3>
    <div class="flex">
        <span class="text-lg">{{ $task->name}}</span>
        @if($task->label)
            <span class="ml-3 text-lg text-red-500"> #{{$task->label}}</span>
        @endif
    </div>
    @if($task->description)
        <h3 class="text-2xl mt-4 mb-2">Description</h3>

        <p>{{$task->description}}</p>
    @endif
</x-layout>
