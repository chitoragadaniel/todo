@props(['task'])

<form method="post" action="/{{$task->id}}" class="flex flex-col">
    @csrf
    @method('PATCH')
    @foreach(['name'=>$task->name, 'description'=>$task->description, 'label'=>$task->label] as $key => $value)
        <div class="mt-2 flex justify-between">
            <span>{{ucfirst($key)}}</span>
            <x-form.input :name="$key" :value="$value"></x-form.input>
        </div>
    @endforeach

    <div class="mt-2">
        <x-form.button>Add</x-form.button>
    </div>
</form>

