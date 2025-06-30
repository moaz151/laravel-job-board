<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Post::all(); // Fetch all posts
        return view("post.index", ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    function show($id)
    {
        $post = Post::findorfail($id);

        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    function create()
    {
        $post = Post::create([
            'title' => 'My Find Unique Post',
            'body' => 'This is to Test Find.',
            'author' => 'Moaz',
            'published' => true
        ]);
        return redirect('/blog');
    }
}
