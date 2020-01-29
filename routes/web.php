<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    $name = request('name');
    $no_escape = "<strong>This is not escaped!</strong>";
    
    return view('test', [
        'name' => $name,
        'no_escape' => $no_escape
    ]);
});

// This sintax is for small projects
/*Route::get('/post/{post}', function ($post) {
    
    $posts = [
        'my-first-post' => 'Hello, this is my first post!',
        'my-second-post' => 'This is a second post.',
    ];

    if(! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }
    
    return view('post', [
        'post' => $posts[$post]
    ]);
});*/

// The same Route but calling a Controller. More suiteble for larger projects.
Route::get('/post/{post}', 'PostsController@show');

