<?php

namespace Delivery\Providers;

use Delivery\Repositories\OrderRepository;
use Delivery\Repositories\OrderRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(OrderRepository::class, OrderRepositoryEloquent::class);
    }
}
