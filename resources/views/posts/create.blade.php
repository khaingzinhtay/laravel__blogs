<x-app-layout>
    <div class="w-3/6 m-auto p-5">
        <form action="{{route('posts.store')}}" method="post" class="bg-green-50 p-5 px-10" enctype="multipart/form-data">
            @csrf
            <h3 class="text-2xl text-center">Create Post</h3>
                <div>
                    <select name="category_id" class="block w-full">
                         @foreach ( $categories as $cat )
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                         @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3">
                </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" class="border rounded w-full py-2 px-3" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-bold mb-2">Photo:</label>
                <input type="file" name="photo" id="photo" class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="featured" class="block text-gray-700 font-bold mb-2">Featured:</label>
                <input type="checkbox" name="featured" id="featured" class="mr-2">
                <span class="text-gray-600">Check if featured</span>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Post</button>
            </div>
            <div>
            </div>
        </form>
    </div>
</x-app-layout>
