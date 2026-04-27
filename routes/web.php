<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'store'])->name('index.store');

Route::get('/artiste/{pseudo}', [IndexController::class, 'artiste'])->name('artiste');
Route::get('/visites-par-artistes', [IndexController::class, 'statistiques']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/upload-image', [IndexController::class, 'uploadImage'])->middleware('auth');

require __DIR__.'/auth.php';
