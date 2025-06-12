<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return redirect('/attendances');
});

Route::resource('attendances', AttendanceController::class);