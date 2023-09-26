<?php

namespace App\Providers;

use App\Models\CartProduct;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Components\TotalQuantity;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Blade::component('package-footer', Footer::class);
        Blade::component('package-header', header::class);
        Blade::component('total-quantity', TotalQuantity::class);
    }
}
