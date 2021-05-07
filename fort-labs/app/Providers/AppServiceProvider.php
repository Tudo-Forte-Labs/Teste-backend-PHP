<?php

namespace App\Providers;

use App\Repositories\ProductsContract;
use App\Repositories\ProductsRepository;
use App\Repositories\SellerContract;
use App\Repositories\SellerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(ProductsContract::class, ProductsRepository::class);
        $this->app->bind(SellerContract::class, SellerRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
    }
}
