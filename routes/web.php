<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Irwandi Hosain",
        "email" => "irwandihosain@gmail.com",
        "image" => "irwandi.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

