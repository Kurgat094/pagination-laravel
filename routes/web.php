<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'input'])->name('input');
Route::post('/inputpost',[HomeController::class,'input'])->name('inputpost');
Route::get('/home',[HomeController::class,'home'])->name('home');