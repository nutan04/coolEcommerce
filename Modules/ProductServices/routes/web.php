<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductServices\Http\Controllers\ProductServicesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('productservices', ProductServicesController::class)->names('productservices');
});
