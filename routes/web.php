<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('auth.register');

Route::post('/logout', function () {
    return redirect()->route('auth.login');
})->name('auth.logout');

Route::get('/todo/create', function () {
    return view('pages.todo.create');
})->name('todo.create');

Route::get('/todo', function () {
    return view('pages.todo.index');
})->name('todo.index');
