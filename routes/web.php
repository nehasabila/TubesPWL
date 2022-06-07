<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//BLOG
Route::get('/', [BlogController::class, 'index']);
Route::get('/post/{id}', [BlogController::class, 'singlepost']);

//POST
Route::get('/user/post', [PostController::class, 'tablepost']);
Route::get('/user/create-post', [PostController::class, 'createpost']);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});
// Route::get('/user/post', function () {
//     return view('user.post');
// });
Route::get('/user/kategori', function () {
    return view('user.kategori');
});
Route::get('/user/profile', function () {
    return view('user.profile');
});
// Route::get('/blog/home', function () {
//     return view('website.bloghome');
// });

    
// Route::get('/login', function () {
//     return view('login.login');
// });
// Route::get('/register', function () {
//     return view('login.register');
// });