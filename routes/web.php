<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\HandymanController;
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

Route::name("assignments.")->group(function () {
    Route::prefix("assignments")->group(function () {
        Route::get('/', [AssignmentController::class, 'index'])->name('index');
        Route::get('/create', [AssignmentController::class, 'create'])->name('create');
        Route::post('/', [AssignmentController::class, 'store'])->name('store');
        Route::get('/{assignment}', [AssignmentController::class, 'show'])->name('show');
        Route::get('/{assignment}/edit', [AssignmentController::class, 'edit'])->name('edit');
        Route::put('/{assignment}', [AssignmentController::class, 'update'])->name('update');
        Route::delete('/{assignment}', [AssignmentController::class, 'destroy'])->name('destroy');
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

Route::name("handymen.")->group(function () {
    Route::prefix("handymen")->group(function () {
        Route::get('/', [HandymanController::class, 'index'])->name('index');
        Route::get('/handyman', [HandymanController::class, 'create'])->name('create');
        Route::post('/', [HandymanController::class, 'store'])->name('store');
        Route::get('/{handyman}', [HandymanController::class, 'show'])->name('show');
        Route::get('/{handyman}/edit', [HandymanController::class, 'edit'])->name('edit');
        Route::put('/{handyman}', [HandymanController::class, 'update'])->name('update');
        Route::delete('/{handyman}', [HandymanController::class, 'destroy'])->name('destroy');
    });
});

// Route::get('/create', [AssignmentController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');

require __DIR__.'/auth.php';
