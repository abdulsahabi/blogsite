<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BlogsController;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;



// Home route
Route::get('/', function () {
  $posts = Post::select('id','author_id', 'title', 'body', 'likes')
   ->with('author', function($query) {
    $query->select('name', 'id');
  })
  ->simplePaginate(8);
  
  return view('welcome', ['blogs' => $posts]);
});

// Blog route
Route::get('/blog', 
  [BlogsController::class, 'index']);
// Create blog route 
Route::get('/blog/create', 
  [BlogsController::class, 'create']);
// Store route
Route::post('/blog/create', [BlogsController::class, 'store']);
// Show blog route
Route::get('/blog/{id}', 
  [BlogsController::class, 'show']);



