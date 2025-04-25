<?php

use Illuminate\Support\Facades\Route;
use Modules\UserServices\Http\Controllers\UserServicesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('userservices', UserServicesController::class)->names('userservices');
});
