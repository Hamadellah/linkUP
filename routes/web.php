<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
route::get('/', function () {
    return view('index');
});
Route::get('/feed', [PostController::class, 'index'])->name('index')->middleware('auth');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get("/login",[PostController::class,'login'])->name('login');
Route::post("/login",[PostController::class,'login1'])->name('login1');
route::post('/logout', [PostController::class, 'logout'])->name('logout');