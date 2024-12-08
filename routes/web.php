<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

include('backend/all.php');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
