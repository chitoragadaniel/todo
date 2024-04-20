<x-layout>
    <h3 class="text-2xl m-4">Name: {{ $task->name}}</h3>
    @if($task->label)
        <span> Label: {{$task->label}}</span>
    @endif
    @if($task->description)
        <p class="mt-2">Description:</p>
        <p>{{$task->description}}</p>
    @endif
</x-layout>
