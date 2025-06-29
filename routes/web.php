<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsOfServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/terms', [TermsOfServiceController::class, 'index'])->name('terms');

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

// Route::name("providers.")->group(function () {
//     Route::prefix("providers")->group(function () {
//         Route::get('/', [ProviderController::class, 'index'])->name('index');
//         Route::get('/create', [ProviderController::class, 'create'])->name('create');
//         Route::post('/', [ProviderController::class, 'store'])->name('store');
//         Route::get('/{provider}', [ProviderController::class, 'show'])->name('show');
//         Route::get('/{provider}/edit', [ProviderController::class, 'edit'])->name('edit');
//         Route::put('/{provider}', [ProviderController::class, 'update'])->name('update');
//         Route::delete('/{provider}', [ProviderController::class, 'destroy'])->name('destroy');
//     });
// });

// Route::name("handymen.")->group(function () {
//     Route::prefix("handymen")->group(function () {
//         Route::get('/', [HandymanController::class, 'index'])->name('index');
//         Route::get('/handyman', [HandymanController::class, 'create'])->name('create');
//         Route::post('/', [HandymanController::class, 'store'])->name('store');
//         Route::get('/{handyman}', [HandymanController::class, 'show'])->name('show');
//         Route::get('/{handyman}/edit', [HandymanController::class, 'edit'])->name('edit');
//         Route::put('/{handyman}', [HandymanController::class, 'update'])->name('update');
//         Route::delete('/{handyman}', [HandymanController::class, 'destroy'])->name('destroy');
//     });
// });

// Alleen admins mogen deze acties
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
});

// Andere routes zonder admin-middleware
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');


// Route::get('/create', [AssignmentController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');

require __DIR__ . '/auth.php';
