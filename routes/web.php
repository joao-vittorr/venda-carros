<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomePageController::class,"index"])->name('home');

Route::get('/about', [HomePageController::class,"about"])->name('about');
Route::get('/posts', [App\Http\Controllers\PostController::class,"index"])->name('posts');
Route::get('/contact', [ContactController::class,"index"])->name('contact');
Route::post('/contact', [ContactController::class,"send"])->name('contact.send');
Route::get('/post1', [App\Http\Controllers\PostController1::class,"index"])->name('post1');
Route::get('/post2', [App\Http\Controllers\PostController2::class,"index"])->name('post2');
Route::get('/post3', [App\Http\Controllers\PostController3::class,"index"])->name('post3');
Route::get('/post4', [App\Http\Controllers\PostController4::class,"index"])->name('post4');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    
    
    Route::get('/post/list', [PostController::class,"list"])->name('post.list');
    Route::get('/post', [PostController::class,"create"])->name('post.create');
    Route::post('/post', [PostController::class,"store"])->name('post.store');
    Route::get('/post/{post}', [PostController::class,"edit"])->name('post.edit');
    Route::put("/post/{post}", [PostController::class,"update"])->name('post.update');
    Route::delete('/post/{post}', [PostController::class,"destroy"])->name('post.destroy');

});
