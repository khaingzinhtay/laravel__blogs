<x-app-layout>
    <div class="container">
        @foreach ( $user->posts as $post )
            <h3>{{$post->title}}</h3>
            <p>{{$post->description}}</p>
            <img src="{{$post->photo}}" alt="" srcset="">
            <p>{{$post->created_at->diffForHumans()}}</p>
        @endforeach
    </div>
</x-app-layout>
