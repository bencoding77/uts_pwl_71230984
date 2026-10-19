<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home']);
Route::get('/mahasiswa', [PageController::class, 'mahasiswa']);
Route::post('/proses-post', [PageController::class, 'prosesPost']);