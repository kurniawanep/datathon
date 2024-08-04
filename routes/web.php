<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/getTemp', [DashboardController::class, 'getTemp']);
Route::get('/getRh', [DashboardController::class, 'getRh']);
Route::get('/getRainfall', [DashboardController::class, 'getRainfall']);
