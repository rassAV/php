<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'index']);
Route::get('/form', [FormController::class, 'form']);
Route::post('/submit', [FormController::class, 'submit']);
Route::get('/data', [FormController::class, 'showData']);