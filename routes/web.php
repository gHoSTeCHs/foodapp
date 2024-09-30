<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('/auth')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'index']);
    Route::get('/login', [SessionController::class, 'index']);
});

