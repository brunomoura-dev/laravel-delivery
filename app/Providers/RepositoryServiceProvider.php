<?php

namespace Delivery\Providers;

use Delivery\Repositories\CategoryRepository;
use Delivery\Repositories\CategoryRepositoryEloquent;
use Delivery\Repositories\ClientRepository;
use Delivery\Repositories\ClientRepositoryEloquent;
use Delivery\Repositories\CupomRepository;
use Delivery\Repositories\CupomRepositoryEloquent;
use Delivery\Repositories\OrderItemRepository;
use Delivery\Repositories\OrderItemRepositoryEloquent;
use Delivery\Repositories\OrderRepository;
use Delivery\Repositories\OrderRepositoryEloquent;
use Delivery\Repositories\ProductRepository;
use Delivery\Repositories\ProductRepositoryEloquent;
use Delivery\Repositories\UserRepository;
use Delivery\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        $this->app->bind(ClientRepository::class, ClientRepositoryEloquent::class);
        $this->app->bind(OrderRepository::class, OrderRepositoryEloquent::class);
        $this->app->bind(OrderItemRepository::class, OrderItemRepositoryEloquent::class);
        $this->app->bind(ProductRepository::class, ProductRepositoryEloquent::class);
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(CupomRepository::class, CupomRepositoryEloquent::class);
    }
}
