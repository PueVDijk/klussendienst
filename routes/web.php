<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name("assigments.")->group(function () {
    Route::prefix("assigments")->group(function () {
        Route::get('/', [AssignmentController::class, 'index'])->name('index');
        Route::get('/create', [AssignmentController::class, 'create'])->name('create');
        Route::post('/', [AssignmentController::class, 'store'])->name('store');
        Route::get('/{assigment}', [AssignmentController::class, 'show'])->name('show');
        Route::get('/{assigment}/edit', [AssignmentController::class, 'edit'])->name('edit');
        Route::put('/{assigment}', [AssignmentController::class, 'update'])->name('update');
        Route::delete('/{assigment}', [AssignmentController::class, 'destroy'])->name('destroy');
    });
});

// Route::get('/create', [AssignmentController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');

require __DIR__.'/auth.php';
