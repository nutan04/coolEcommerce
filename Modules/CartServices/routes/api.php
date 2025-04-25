<?php

use Illuminate\Support\Facades\Route;
use Modules\CartServices\Http\Controllers\CartServicesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('cartservices', CartServicesController::class)->names('cartservices');
});
