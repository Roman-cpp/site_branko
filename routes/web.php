<?php

use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Branko;
use App\Http\Controllers\BrankoIncubation;
use App\Http\Controllers\BrankoContact;
use App\Http\Controllers\Login;
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

Route::get('/', [Branko::class, 'show']);

Route::get('/incubation', [BrankoIncubation::class, 'show']);

Route::get('/contact', [BrankoContact::class, 'show']);

Route::get('/test', [Test::class, 'show']);
Route::post('/test/send', [Test::class, 'insert']);

Route::get('/login', [Login::class, 'show']);
