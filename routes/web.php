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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::middleware('is_admin')->group(function () {
// Route::post('/post/create',[App\Http\Controllers\PostController::class,'create'])->name('create');
  Route::post('/post/create/', [App\Http\Controllers\PostController::class, 'create']);
  Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show']);
  Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
  Route::get('/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
  Route::put('/post/{post}', [App\Http\Controllers\PostController::class, 'update']);
  Route::delete('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy']);
// });
