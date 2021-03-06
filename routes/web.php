<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FinanciamentoController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdvertController;
use App\Http\Controllers\SearchController;
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


Route::get('/contact', [ContactController::class,"index"])->name('contact');
Route::post('/contact', [ContactController::class,"send"])->name('contact.send');
Route::get('/post1', [App\Http\Controllers\PostController1::class,"index"])->name('post1');
Route::get('/post2', [App\Http\Controllers\PostController2::class,"index"])->name('post2');
Route::get('/post3', [App\Http\Controllers\PostController3::class,"index"])->name('post3');
Route::get('/post4', [App\Http\Controllers\PostController4::class,"index"])->name('post4');
Route::get('/search', [App\Http\Controllers\SearchController::class,"index"])->name('search');
Route::get('/search/list', [App\Http\Controllers\SearchController::class,"list"])->name('search.list');
Route::get('/financiamento/{advert}', [FinanciamentoController::class,"index"])->name('financiamento');
Route::post('/financiamento/{advert}', [App\Http\Controllers\FinanciamentoController::class,"calcular"])->name('financiamento.calcular');
Route::get('/anuncio/{advert}', [AdvertController::class,"edit"])->name('anuncio');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    
    Route::get('/advert/list', [AdvertController::class,"list"])->name('advert.list');
    Route::get('/ad', [AdvertController::class,"create"])->name('advert.create');
    Route::post('/ad', [AdvertController::class,"store"])->name('advert.store');
    Route::get('/advert/{advert}', [AdvertController::class,"edit"])->name('advert.edit');
    Route::put("/advert/{advert}", [AdvertController::class,"update"])->name('advert.update');
    Route::delete('/advert/{advert}', [AdvertController::class,"destroy"])->name('advert.destroy');
    
    Route::get('/type/list', [TypeController::class,"list"])->name('type.list');
    Route::get('/type', [TypeController::class,"create"])->name('type.create');
    Route::post('/type', [TypeController::class,"store"])->name('type.store');
    Route::get('/type/{type}', [TypeController::class,"edit"])->name('type.edit');
    Route::put("/type/{type}", [TypeController::class,"update"])->name('type.update');
    Route::delete('/type/{type}', [TypeController::class,"destroy"])->name('type.destroy');
    Route::get('/type/desvincular/{type_post}', [TypeController::class,"desvincular"])->name('type.desvincular');

    Route::get('/category/list', [CategoryController::class,"list"])->name('category.list');
    Route::get('/category', [CategoryController::class,"create"])->name('category.create');
    Route::post('/category', [CategoryController::class,"store"])->name('category.store');
    Route::get('/category/{category}', [CategoryController::class,"edit"])->name('category.edit');
    Route::put("/category/{category}", [CategoryController::class,"update"])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class,"destroy"])->name('category.destroy');
    Route::get('/category/desvincular/{category_post}', [CategoryController::class,"desvincular"])->name('category.desvincular');

    Route::get('/user/list', [UserController::class,"list"])->name('user.list');
    Route::get('/user/{user}', [UserController::class,"edit"])->name('user.edit');
});

