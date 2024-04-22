<x-layout>
    @include('components/search-bar')
    <x-task-list :tasks="$tasks->filter(function ($task) {return !$task->done;})">
        List of ongoing tasks
        <x-slot name="button">Done</x-slot>
    </x-task-list>

    <x-task-list :tasks="$tasks->filter(function ($task) {return $task->done;})">
        Finished tasks
        <x-slot name="button">Not done</x-slot>
    </x-task-list>


    <h3 class="text-2xl mt-10 mb-4">Add a new task</h3>
    @include('components/add-task')
</x-layout>
