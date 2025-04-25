<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('user') // <-- URL will start with user
            ->group(base_path('routes/api-user.php'));

        Route::middleware('api')
            ->prefix('cart')
            ->group(base_path('routes/api-cart.php'));

        Route::middleware('api')
            ->prefix('order')
            ->group(base_path('routes/api-order.php'));

        Route::middleware('api')
            ->prefix('payment')
            ->group(base_path('routes/api-payment.php'));

        Route::middleware('api')
            ->prefix('product')
            ->group(base_path('routes/api-product.php'));
    }
}
