<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrankoController;
use App\Http\Controllers\BrankoIncubationController;
use App\Http\Controllers\BrankoContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainBlogController;
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

Route::get('/', [BrankoController::class, 'show']);

Route::get('/incubation', [BrankoIncubationController::class, 'show']);

Route::get('/contact', [BrankoContactController::class, 'show']);

Route::get('/login', [LoginController::class, 'show']);

Route::prefix('edit')->group(function () {
    Route::get('/', [EditController::class,'show'])->name('edit');

    Route::resource('gallery', GalleryController::class);

    Route::resource('mainBlog', MainBlogController::class);

});

