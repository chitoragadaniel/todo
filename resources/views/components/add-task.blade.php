<form method="post" action="/" class="flex flex-col">
    @csrf
    @method('PUT')
    @foreach(['name', 'description', 'label'] as $input)
        <div class="mb-2 flex justify-between">
            <span>{{ucfirst($input)}}</span>
            <x-form.input :name="$input"></x-form.input>
        </div>
    @endforeach

    <div class="mt-2">
        <x-form.button>Add</x-form.button>
    </div>

</form>
