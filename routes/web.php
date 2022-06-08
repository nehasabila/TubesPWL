<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;
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

 // LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'authenticate']);
    
// REGISTER
Route::get('/register', [RegisterController::class, 'index'])->name('index');
Route::post('/register', [RegisterController::class, 'store']);

// LOGOUT
Route::get('/logout', [LoginController::class, 'logout']);

//BLOG
Route::get('/', [BlogController::class, 'index']);
Route::get('/post/{id}', [BlogController::class, 'singlepost']);

//POST
Route::get('/user/post', [PostController::class, 'index']);
Route::get('/user/allpost', [PostController::class, 'allpost']);
Route::get('/user/create-post', [PostController::class, 'createpost']);
Route::get('/user/update-post/{postData}', [PostController::class, 'updatepost']);
Route::post('/user/create-post', [PostController::class, 'store']);
Route::put('/user/update-post/{id}', [PostController::class, 'update']);
Route::get('/user/destroy-post/{id}', [PostController::class, 'destroy']);

//COMMENT
Route::get('/user/comment', [CommentController::class, 'index']);
Route::get('/comment', [CommentController::class, 'showcomment']);
Route::post('/comment', [CommentController::class, 'create']);
Route::get('/user/comment/{id}', [CommentController::class, 'destroy'])->name('blogdestroy');

//KATEGORI
Route::get('/user/kategori', [KategoriController::class, 'index']);
Route::get('/user/create-kategori', [KategoriController::class, 'create']);
Route::post('/user/create-kategori', [KategoriController::class, 'store']);
Route::get('/user/update-kategori/{kategoriData}', [KategoriController::class, 'updatekategori']);
Route::put('/user/update-kategori/{id}', [KategoriController::class, 'update']);
Route::get('/user/destroy-kategori/{id}', [KategoriController::class, 'destroy']);
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});
 
Route::get('/user/profile', function () {
    return view('user.profile');
});


