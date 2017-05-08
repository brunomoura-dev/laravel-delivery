<?php

namespace Delivery\Providers;

use Delivery\Repositories\OrderItemRepository;
use Delivery\Repositories\OrderRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class OrderItemServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(OrderItemRepository::class, OrderRepositoryEloquent::class);
    }
}
