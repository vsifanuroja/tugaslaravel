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



Route::post('/create3', [HomeController::class, 'store3']);
Route::get('/create9', [HomeController::class, 'store9']);
Route::get('/create8', [HomeController::class, 'store8']);
Route::get('/create7', [HomeController::class, 'store7']);


Route::get('/show', [HomeController::class, 'show']);

Route::put('/products/{id}', [HomeController::class, 'update']);
Route::delete('/products/{id}', [HomeController::class, 'destroy']);


Route::get('/products/{id}/edit', [HomeController::class, 'edit']);

Route::get("/input", [HomeController::class, "input"]);

