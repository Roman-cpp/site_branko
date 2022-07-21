<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\Test;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrankoController;
use App\Http\Controllers\BrankoIncubationController;
use App\Http\Controllers\BrankoContactController;
use App\Http\Controllers\LoginController;
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

Route::resource('/edit', EditController::class);






//work form
Route::post('/test/send', [Test::class, 'insertProposal']);

//work file
Route::post('/file/send', [Test::class, 'insertImg']);

Route::get('/login', [LoginController::class, 'show']);

Route::resource('list_form', TestController::class);
