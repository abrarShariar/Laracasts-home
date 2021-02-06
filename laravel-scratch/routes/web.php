<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;

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

Route::get('/test/{name}', [TestController::class, 'show']);

Route::get('posts', 'PostController@show');
Route::get('/', function () {
    return [
        "test" => 'Hello world'
    ];
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('test', function () {
    $name = request('name');
    return view('test', [
        'name' => $name
    ]);
});



// Route::get('/posts/{post}', function ($post) {

//     $posts = [
//         'first-post' => 'My First Post',
//         'second-post' => 'My Second Post'
//     ];

//     if (!isset($posts[$post])) {
//         abort(500, 'Failed to load');
//     }

//     return view('post', [
//         'data' => $posts[request('post')] ?? 'Abrar'
//     ]);
// });
