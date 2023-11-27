<x-app-layout>
    <div class="container">
        <h1>Todo Page</h1>
        <table class="">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->completed}}</td>
                    <td>
                        <a href="{{route('todos.edit',$todo->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('todos.destroy', ['todo' => $todo->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning btn-block">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
