<?php

use App\Domains\Identity\Http\Controllers\CurrentUserController;
use App\Http\Controllers\AppConfigController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('v1.')->group(function () {
    Route::get('/app-config', AppConfigController::class)->name('app-config');

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', CurrentUserController::class)->name('user');
    });
});
