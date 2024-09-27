<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [HomeController::class, 'index']);

Route::get('/form', function () {
    return view('form');
});

Route::post("/submit",[HomeController::class, "form"]);

