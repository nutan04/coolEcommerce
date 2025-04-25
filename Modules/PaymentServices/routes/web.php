<?php

use Illuminate\Support\Facades\Route;
use Modules\PaymentServices\Http\Controllers\PaymentServicesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('paymentservices', PaymentServicesController::class)->names('paymentservices');
});
