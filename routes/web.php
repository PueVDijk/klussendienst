<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
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

Route::name("providers.")->group(function () {
    Route::prefix("providers")->group(function () {
        Route::get('/', [ProviderController::class, 'index'])->name('index');
        Route::get('/create', [ProviderController::class, 'create'])->name('create');
        Route::post('/', [ProviderController::class, 'store'])->name('store');
        Route::get('/{provider}', [ProviderController::class, 'show'])->name('show');
        Route::get('/{provider}/edit', [ProviderController::class, 'edit'])->name('edit');
        Route::put('/{provider}', [ProviderController::class, 'update'])->name('update');
        Route::delete('/{provider}', [ProviderController::class, 'destroy'])->name('destroy');
    });
});

// Route::get('/create', [AssignmentController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');

require __DIR__.'/auth.php';
