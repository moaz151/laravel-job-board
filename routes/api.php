<?php

use App\Http\Controllers\API\PostApiController;
use Illuminate\support\Facades\Route;

// use App\Http\Controllers\PostController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\TagController;

// // REST API (Restful API) => HTTP standard
// //REQUEST => GET, POST, PUT, PATCH, DELETE
// // RESPONSE => 200, 201, 204, 400, 404, 500

Route::apiResource('post', PostApiController::class);



// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);

// Route::post('/comments', [CommentController::class, 'create']);

// Route::post('/tags', [TagController::class, 'create']);