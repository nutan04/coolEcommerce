<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductServices\Http\Controllers\ProductServicesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('productservices', ProductServicesController::class)->names('productservices');
});
