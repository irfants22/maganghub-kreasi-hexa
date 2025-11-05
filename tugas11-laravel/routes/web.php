<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/table', function () {
    return view('table');
});
Route::get('/data-tables', function () {
    return view('data-tables');
});;
