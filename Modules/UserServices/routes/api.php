<?php

use Illuminate\Support\Facades\Route;
use Modules\UserServices\Http\Controllers\UserServicesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('userservices', UserServicesController::class)->names('userservices');
});
