<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = validator(request()->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'featured' => 'boolean',
            'category_id' => 'required|exists:categories,id',
            // 'user_id' => 'required|exists:users,id',
        ]);
        return $request->category_id;
        // $validator =  $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'featured' => 'boolean',
        //     'category_id' => 'required|exists:categories,id',
        //     'user_id' => 'required|exists:users,id',
        // ]);
        if ($validator->fails()) {
            return response($validator->errors()->all(), 400);
        }
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $post = new Post([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'photo' => $photoPath ?? null,
            'featured' => $request->featured ?? 0,
            'category_id' => $request->input('category_id'),
            // 'user_id' => $request->input('user_id'),
            'user_id' => auth()->user()->id,
        ]);
    //    return $post;
        $post->save();
          return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
