<x-app-layout>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="title" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $todo->title }}" /><br>
            <input type="text" name="description" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $todo->description }}" /><br>

            <!-- Set the name to "completed" and use value 1 when checked, 0 when unchecked -->
            <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>

            <input type="submit" value="Edit">
        </div>
    </form>
</x-app-layout>
