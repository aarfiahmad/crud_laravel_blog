<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // $post = Post::all();
    // $post =Post::where('user_id',auth()->id())->get();
    // $post = auth()->user()->usersCoolPosts()->latest()->get();

    $post = [];
    if (auth()->check()) {
        $post = auth()->user()->usersCoolPosts()->latest()->get();
    }

    return view('home',['posts'=>$post]);
});

// Route::Post('/register', function(){
//     return "thank your me";
// });




// Login method

 Route::post('/register', [UserController::class, 'register']);
 Route::post('/logout', [UserController::class, 'logout']);
 Route::post('/login', [UserController::class, 'login']);

//  ----------------------
 Route::post('/create-post', [PostController::class, 'createPost']);
 Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
 Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
 Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);