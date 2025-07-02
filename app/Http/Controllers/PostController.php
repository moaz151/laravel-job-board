<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Post::paginate(10); // Fetch all posts
        return view("post.index", ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    function show($id)
    {
        $post = Post::findorfail($id);

        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    function create()
    {
        // $post = Post::create([
        //     'title' => 'Test Post',
        //     'body' => 'This is to Test And will be removed.',
        //     'author' => 'Moaz',
        //     'published' => true
        // ]);
        Post::factory(100)->create(); // Create 100 posts using the factory
        return redirect('/blog');
    }

    function delete()
    {
        Post::destroy(1);
    }
}
