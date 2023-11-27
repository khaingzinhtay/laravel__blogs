<x-app-layout>
    <div class="container">

        <h1 class="p-5">All Posts</h1>
        @foreach ( $posts as $post )
            <div class="shadow-lg p-5 m-5">
               <a href="">{{$post->title}}</a>
               <p>{{ $post->description }}</p>
               <img src="{{ $post->photo }}" alt="" srcset="">
               <p>{{ $post->created_at->diffForHumans() }}</p>
               <p>
                Post By
                <a href="{{route('users.show',$post->user->id)}}">{{$post->user->name}}</a>
               </p>
            </div>
        @endforeach
    </div>
</x-app-layout>
