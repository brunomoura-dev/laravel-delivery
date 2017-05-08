<?php

namespace Delivery\Providers;

use Delivery\Repositories\CategoryRepository;
use Delivery\Repositories\CategoryRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
    }
}
