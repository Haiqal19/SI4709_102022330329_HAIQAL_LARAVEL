<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogsController::class, 'index']);