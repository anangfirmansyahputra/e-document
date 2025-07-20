<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return inertia('home');
})->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');

});
