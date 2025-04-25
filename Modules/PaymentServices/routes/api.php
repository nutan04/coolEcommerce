<?php

use Illuminate\Support\Facades\Route;
use Modules\PaymentServices\Http\Controllers\PaymentServicesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('paymentservices', PaymentServicesController::class)->names('paymentservices');
});
