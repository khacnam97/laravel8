<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [HomeController::class, 'index'])->name('page');

Route::get('create', [PostController::class, 'create'])->name('post.create');
Route::post('store-form', [PostController::class, 'store']);

Route::get('post/index', [PostController::class, 'index'])->name('post.index');
