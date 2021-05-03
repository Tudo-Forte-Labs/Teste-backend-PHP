<?php

namespace App\Providers;

use App\Contracts\InterfaceSearchableProduct;
use App\Services\Api\v1\ProductService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->bind(InterfaceSearchableProduct::class,
                ProductService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
