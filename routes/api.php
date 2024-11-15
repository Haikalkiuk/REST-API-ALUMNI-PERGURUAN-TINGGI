<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

Route::resource('alumni', AlumniController::class);
Route::get('alumni/search/{name}', [AlumniController::class, 'search']);
Route::get('alumni/status/fresh-graduate', [AlumniController::class, 'freshGraduate']);
Route::get('alumni/status/employed', [AlumniController::class, 'employed']);
Route::get('alumni/status/unemployed', [AlumniController::class, 'unemployed']);
