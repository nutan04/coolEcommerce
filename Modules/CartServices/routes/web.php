<?php

use Illuminate\Support\Facades\Route;
use Modules\CartServices\Http\Controllers\CartServicesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('cartservices', CartServicesController::class)->names('cartservices');
});
