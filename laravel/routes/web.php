<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AlbumController;

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

Route::get('/',  [NewsController::class,'index'])->name('home');

Route::get('/news/create', [NewsController::class,'create']);
Route::get('/news/edit/{id}', [NewsController::class,'edit'])->name('news.edit');
Route::post('/news/edit/{id}', [NewsController::class,'update'])->name('news.update');
Route::get('/news/{id}', [NewsController::class,'show']);
Route::post('/news',  [NewsController::class,'store'])->name('store');
Route::get('/news/{id}/album',  [AlbumController::class,'create']);
Route::post('/news/{id}/album', [AlbumController::class,'store'])->name('album.store');
Route::get('/albums/{id}', [AlbumController::class,'show']);


