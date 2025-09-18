<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'show'])->name('index');
Route::get('/contact', [HomeController::class, 'show_contact'])->name('contact');
Route::get('/about', [HomeController::class, 'show_about'])->name('about');
Route::get('/product', [HomeController::class, 'show_product'])->name('product');


Route::get('/login',function(){
       return view('login');
});

Route::get('/signup', [AuthController::class, 'show'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'register'])->name('signup');
Route::get('/login', [AuthController::class, 'get'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post', [PostController::class, 'createpost'])->name('create.post');
Route::get('/post', [PostController::class, 'showpost'])->name('post.form');
