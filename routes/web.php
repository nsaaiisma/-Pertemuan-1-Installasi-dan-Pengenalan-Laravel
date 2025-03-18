<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/Home', function () {
    return "
        <div style='text-align: center; font-size: 24px; font-weight: bold;'>
            Selamat Datang Di Halaman Utama The Scott Resort 
            <br><br>
            <a href='/Stay' style='text-decoration: none; font-size: 20px; color: green;'>
                01 Stay
            </a>
            <br><br>
            <a href='/Eat&Drink' style='text-decoration: none; font-size: 20px; color: green;'>
                02 Eat&Drink
            </a>
            <br><br>
            <a href='/Spa&Wellness' style='text-decoration: none; font-size: 20px; color: green;'>
                03 Spa&Wellness
            </a>
            <br><br>
            <a href='/Pools' style='text-decoration: none; font-size: 20px; color: green;'>
                04 Pools
            </a>
            <br><br>
            <a href='/Location' style='text-decoration: none; font-size: 20px; color: green;'>
                05 Location
            </a>
            <br><br>
            <a href='/Meetings&Events' style='text-decoration: none; font-size: 20px; color: green;'>
                06 Meetings&Events
            </a>
            <br><br>
            <a href='/Weddings' style='text-decoration: none; font-size: 20px; color: green;'>
                07 Weddings
            </a>
            <br><br>
            <a href='/What's On' style='text-decoration: none; font-size: 20px; color: green;'>
                08 What's On
            </a>
            <br><br>
            <a href='/Packages' style='text-decoration: none; font-size: 20px; color: green;'>
                09 Packages
            </a>
            <br><br>
            <a href='/Gallery' style='text-decoration: none; font-size: 20px; color: green;'>
                010 Gallery
            </a>
        </div>
        <div>
            <a href='https://www.thescottresort.com/rooms/' style='text-align: center; text-decoration: none; font-size: 20px; color: black; font-weight: bold'>
                Lihat Selengkapnya:
            </a>
        </div>
    ";
});
    
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
