<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $categories = Category::has('posts')->get();

        return view('admin.posts.index')->with([
            'posts' => $posts , 'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {


        $categories = Category::has('posts')->get();

        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        return view('posts.show')->with([
            'post' => $post,
            'categories' => $categories,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
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
