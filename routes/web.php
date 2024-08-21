<?php

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/posts', function () {
    // $posts = Post::with('author', 'category')->latest()->get();

    // $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->simplepaginate(6)->withQueryString()]);
});


Route::get('/posts/{posts:slug}', function (Post $posts) {

    // $post = Posts::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('author', 'category');

    return view('posts', ['title' => count($user->posts) . ' Articles by' . ' ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category  $category) {
    // $posts = $category->posts->load('author', 'category');
    return view('posts', ['title' => ' Articles in:' . ' ' . $category->name, 'posts' => $category->posts]);
});
