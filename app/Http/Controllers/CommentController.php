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
        Comment::create([
            'author' => 'Basiouny',
            'content' => 'This is Basiouny\'s Test Content.',
            'post_id' => 2
        ]);
        return redirect('/comments');
    }
}
