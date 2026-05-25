<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});
    Route::get('/products', [ProductController::class, 'index']);

    Route::get('/customers', [CustomerController::class, 'index']);

    Route::get('/customers/cairo', [CustomerController::class, 'cairoCustomers']);

    Route::get('/products/expensive', [ProductController::class, 'expensiveProducts']);

require __DIR__.'/auth.php';
