<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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


// Praktikum 1
// no 2
Route::get('/hello', function () {
    return ('Hello World ');
});

// no 4
Route::get('/world', function () {
    return ('World ');
});

// no 6
Route::get('/', function () {
    return ('Selamat Datang ');
});

// no 7
Route::get('/about', function () {
    return ('Fardiyani Afroul Yasinta 2241760030');
});

// no 8
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

// no 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId. "Komentar ke- ". $commentId;
});

// no 13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

// no 14
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya '.$name;
});

// no 17
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama Saya '.$name;
});

// Praktikum 2
// no 4
Route::get('/hello', [WelcomeController::class,'hello']);

// no 6
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{$id}', [PageController::class,'articles']);

// no 7
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{$id}', [ArticleController::class,'articles']);

// no 8
Route::Resource('photos', PhotoController::class);

// Praktikum 3
// no 2
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Fardiyani Afroul Yasinta']);
    });

// no 9
Route::get('/greeting', [WelcomeController::class, 'greeting']);

