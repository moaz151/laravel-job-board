<?php

namespace App\Http\Controllers;

use App\Models\Comment; // Import the Post model
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index()
    {
        // Eloquenr ORM -> Get All Data
        $data = Comment::all(); // Fetch all posts
        return view("comments.index", ['comments' => $data, 'pageTitle' => 'Blog']);
    }

    function create()
    {
        // Comment::create([
        //     'author' => 'Moaz',
        //     'content' => 'This is Test Comment for post 2.',
        //     'post_id' => 2
        // ]);
        Comment::factory(20)->create(); // Create 100 comments using the factory
        return redirect('/comments');
    }
}
