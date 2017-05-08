<?php

namespace Delivery\Providers;

use Delivery\Repositories\ProductRepository;
use Delivery\Repositories\ProductRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(ProductRepository::class, ProductRepositoryEloquent::class);
    }
}
