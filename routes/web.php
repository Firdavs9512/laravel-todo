<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/todo/create', function () {
    return view('pages.todo.create');
})->name('todo.create');

Route::get('/todo', function () {
    return view('pages.todo.index');
})->name('todo.index');

// Auth routes
Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'loginForm')->name('login.form')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::get('/register', 'registerForm')->name('register.form')->middleware('guest');
    Route::post('/register', 'register')->name('register')->middleware('guest');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});
