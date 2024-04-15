<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/account', function () {
    return view('account');
});

use App\Http\Controllers\RegisterController;

Route::post('/register', [RegisterController::class, 'register'])->name('register');
