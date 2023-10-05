<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routing  menampilkan data post 
route::get('/post', [PostController::class, 'index'])->name('post.index');

// routing Menambahkan form post
route::get('/post/Create', [PostController::class, 'create'])->name('post.create');

// routing Menambahakan data post
route::post('/post', [PostController::class, 'store'])->name('post.store');

// routing  menampilkan data ranking 
route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');

// routing  menampilkan data detail 
route::get('/detail', [DetailController::class, 'index'])->name('detail.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
