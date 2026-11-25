<?php

use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [SessionsController::class, 'index'])->name('login.index');
Route::post('/login', [SessionsController::class, 'login'])->name('login.store');

Route::post('/logout', [SessionsController::class, 'logout'])->name('logout');
