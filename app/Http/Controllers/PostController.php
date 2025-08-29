<?php

namespace App\Http\Controllers;
use App\Models\Post; // Import the Post model

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Post::paginate(10); // Fetch all posts
        return view("post.index", ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['pageTitle' => 'Create New Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // @TODO: THis will complated in forms sections
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
        return view('post.edit', ['pageTitle' => 'Edit Post']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @TODO: THis will complated in forms sections
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @TODO: THis will complated in forms sections
    }
}
