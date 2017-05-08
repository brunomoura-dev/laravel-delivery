<?php

namespace Delivery\Providers;

use Delivery\Repositories\UserRepository;
use Delivery\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
    }
}
