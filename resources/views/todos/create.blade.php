<x-app-layout>
    <form action="{{route('todos.store')}}" method="post" class="m-auto w-3/4 mt-6 p-5 bg-green-200">
        @csrf
        <h1>Create Page</h1>

        <input type="text" name="title" placeholder="Type here" class="input input-bordered w-full max-w-xs block my-3" value="{{old('title')}}" />
        <input name="description" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs block my-3" value="{{old('description')}}"/>
        <input type="checkbox" value="1" name="completed">
        <input type="submit" value="Submit" class="">
    </form>
</x-app-layout>
