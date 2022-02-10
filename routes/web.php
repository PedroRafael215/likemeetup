<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

/////////////////////////////////////////////////////////////////////////////////
Route::get('/produtos',[ProductController::class,'search']);

Route::get('/produtos_teste/{id?}', [ProductController::class, 'searchTeste']);

Route::get('/contact', [ContactController::class, 'contact']);
