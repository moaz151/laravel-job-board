<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use App\Models\Tag; // Import the Post model

use Illuminate\Http\Request;

class TagController extends Controller
{
    function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Tag::all(); // Fetch all posts
        return view("tag.index", ['tags' => $data, 'pageTitle' => 'Tags']);
    }

    function create()
    {
        Tag::create([
            'title' => 'Web Development'
        ]);
        return redirect('/tags');
    }

    function testManyToMany()
    {
        $post2 = Post::find(2); // Find the post with ID 2
        $post3 = Post::find(3); // Find the post with ID 2

        $post2->tags()->attach([1, 2]); // Attach tag with ID 1 to post 2
        $post3->tags()->attach([1]); // Attach tag with ID 1 to post 3

        return response()->json([
            'message' => 'Tags attached successfully',
            'post2_tags' => $post2->tags,
            'post3_tags' => $post3->tags
        ]);

        // $tag = Tag::find(1); // Find the tag with ID 1
        // $tag->posts()->attach(2); // Attach posts with IDs 1 and 2 to the tag

        // $tag = Tag::find(1); // Find the tag with ID 1
        // return response()->json([
        //     'tag' => $tag->title,
        //     'posts' => $tag->posts
        // ]);
    }
}
