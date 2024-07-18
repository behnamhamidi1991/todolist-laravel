<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return ('welcome');
});

Route::get('/blog', function() {
    return "This is the blog page";
})->name('blog');

Route::get('/courses', function() {
    return redirect()->route('blog');
})->name('blog-redirect');

Route::get('/blog/{id}', function ($id) {
    return 'This is a post with the id of ' . $id . '!';  
})->name('blog-single-post');


Route::fallback(function () {
    return 'Still got somewhere!';
});

// GET
// POST
// PUT
// DELETE