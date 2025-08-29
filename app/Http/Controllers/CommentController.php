<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // Import the Post model



class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquenr ORM -> Get All Data
        $comments = Comment::paginate(10);
        return view("comments.index", ['comments' => $comments, 'pageTitle' => 'Blog Comments']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comments.create', ['pageTitle' => 'Create New Comment']);
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
    public function show(string $id)
    {
        $comment = Comment::find($id);
        return view('comments.show', ['comment' => $comment, 'pageTitle' => 'Comment Details']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::find($id);
        return view('comments.edit', ['comment' => 'comment','pageTitle'=> 'Edit Comment']);
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
