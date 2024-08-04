<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/temp', [DataController::class, 'temp']);
Route::post('/rh', [DataController::class, 'rh']);
Route::post('/rainfall', [DataController::class, 'rainfall']);
