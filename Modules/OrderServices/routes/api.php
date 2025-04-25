<?php

use Illuminate\Support\Facades\Route;
use Modules\OrderServices\Http\Controllers\OrderServicesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('orderservices', OrderServicesController::class)->names('orderservices');
});
