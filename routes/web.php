<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// [controller a utilisé, 'nom de la methode a utilise dans le controller']->name('nom de la route)
Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');