<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/Home', function () {
    return view('homepage');
})->name('Homepage');
    
Route::get('/Stay', function () {
    return "Selamat datang di halaman Stay";
});

Route::get('/Eat&Drink', function () {
    return "Selamat datang di halaman Eat&Drink";
});

Route::get('/Spa&Wellness', function () {
    return "Selamat datang di halaman Spa&Wellness";
});

Route::get('/Pools', function () {
    return "Selamat datang di halaman Pools";
});

Route::get('/Location', function () {
    return "Selamat datang di halaman Location";
});

Route::get('/Meetings&Events', function () {
    return "Selamat datang di halaman Meetings&Events";
});

Route::get('/Weddings', function () {
    return "Selamat datang di halaman Weddings";
});

Route::get('/Whats On', function () {
    return "Selamat datang di halaman Whats On";
});

Route::get('/Packages', function () {
    return "Selamat datang di halaman Packages";
});

Route::get('/Galley', function () {
    return "Selamat datang di halaman Gallery";
});

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

require __DIR__.'/auth.php';
