<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\GalleryController;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrankoController;
use App\Http\Controllers\BrankoIncubationController;
use App\Http\Controllers\BrankoContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainBlogController;
use Illuminate\Support\Facades\Storage;

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

//Route::get('/login', [LoginController::class, 'show']);

Route::prefix('edit')->group(function () {
    Route::resource('image', ImageController::class);

    Route::resource('gallery', GalleryController::class);
});

Route::get('test', function () {
    //return view('test');
    $img = "image/mJcKW5pN59MoFc0mDFHzHMPrsZBCwau62XNa32iz.jpg";
    echo(asset($img));
    return view('test', ['img' => '/storage/'.$img]);

});



Route::get('/profile', function () {
    // Только аутентифицированные пользователи могут получить доступ к этому маршруту ...
})->middleware('auth.basic')->name('noooooo');
