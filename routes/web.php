<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeminarController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('seminars', SeminarController::class);