<?php

use Illuminate\Support\Facades\Route;
use Modules\OrderServices\Http\Controllers\OrderServicesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('orderservices', OrderServicesController::class)->names('orderservices');
});
