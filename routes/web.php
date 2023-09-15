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
Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('store-form', [PostController::class, 'store'])->name('post.store');
Route::post('edit-store/{id}', [PostController::class, 'storeEdit'])->name('post.store.edit');
Route::get('delete/{id}', [PostController::class, 'delete'])->name('post.delete');

Route::get('post/index', [PostController::class, 'index'])->name('post.index');
