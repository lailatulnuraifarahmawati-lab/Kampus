<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeminarController;

Route::resource('seminars', SeminarController::class);

Route::get('/', function () {
    return redirect('/seminars');
});