<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', [PostsController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostsController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostsController::class, 'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

