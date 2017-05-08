<?php

namespace Delivery\Providers;

use Delivery\Repositories\ClientRepository;
use Delivery\Repositories\ClientRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(ClientRepository::class, ClientRepositoryEloquent::class);
    }
}
