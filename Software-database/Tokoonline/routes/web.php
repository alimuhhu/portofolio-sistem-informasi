<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda_C;
use App\Http\Controllers\Login_C;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('backend.login');
});
Route::get('backend/beranda', [Beranda_C::class, 'berandaBackend'])->name('backend.beranda')->middleware('auth');
Route::get('backend/login', [Login_C::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [Login_C::class, 'authenticateBackend'])->name('backend.login');
Route::post('backend/logout', [Login_C::class, 'logoutBackend'])->name('backend.logout');