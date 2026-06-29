<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
Route::get('/feed', [PostController::class, 'index'])->name('index');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get("/login",[PostController::class,'login'])->name('login');
Route::post("/login",[PostController::class,'login1'])->name('login1');

 


