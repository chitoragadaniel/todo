<form method="post" action="/" class="flex flex-col">
    @csrf
    @method('PUT')
    <div>
        <label>
            Name
            <input type="text" name="name" required
                   class="bg-black border-2 border-gray-300 rounded-md float-right ml-2">
        </label>
    </div>
    <div class="mt-2">
        <label>
            Description
            <input type="text" name="description"
                   class="bg-black border-2 border-gray-300 rounded-md float-right ml-2">
        </label>
    </div>
    <div class="mt-2">
        <label>
            Label
            <input type="text" name="label"
                   class="bg-black border-2 border-gray-300 rounded-md float-right ml-2">
        </label>
    </div>
    <div class="mt-2">
        <x-button>Add</x-button>
    </div>

</form>
