<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuadraticController;

Route::get('/quadratic', [QuadraticController::class, 'showForm']);
Route::post('/quadratic', [QuadraticController::class, 'calculate']);