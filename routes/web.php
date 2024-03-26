<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
    return view('index');
});
Route::get('/contact',function(){
    return view('contact');

});
Route::get('/about',function(){
    return view('about');

});
Route::get('/product',function(){
    return view('product');

});
Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', [AuthController::class, 'show'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'register'])->name('signup');

Route::get('/post', [PostController::class, 'showpost'])->name('post.form');
Route::post('/post', [PostController::class, 'createpost'])->name('create.post');
