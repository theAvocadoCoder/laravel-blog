<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category.index');

Route::get('/tag/{slug}', [TagController::class, 'index'])->name('tag.index');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
