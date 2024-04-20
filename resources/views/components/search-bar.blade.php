<h3 class="text-2xl mt-10 mb-4">Search tasks (by title, description, label)</h3>
<form method="get">
    @csrf
    <x-form.input :name="'search'"></x-form.input>
    <x-form.button>Send</x-form.button>
</form>
