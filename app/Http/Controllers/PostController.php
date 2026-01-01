<?php

namespace App\Http\Controllers;
use App\Models\Post; // Import the Post model
use App\Http\Requests\Request;
use App\Http\Requests\BlogPostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Post::latest()->paginate(10); // Fetch all posts
        return view("post.index", ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['pageTitle' => 'Blog - Create New Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // /blog/{id}
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // /blog/{id}/edit
    {
        $post = Post::findOrfail($id);
        return view('post.edit', ['post' => $post, 'pageTitle' => 'Blog - Edit Post: ' . $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {
        $post = Post::findOrfail($id);

        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');

        $post->save();

        return redirect('/blog')->with('success', 'Post Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrfail($id);
        $post->delete();

        return redirect('/blog')->with('success', 'Post Delete successfully!');
    }
}
