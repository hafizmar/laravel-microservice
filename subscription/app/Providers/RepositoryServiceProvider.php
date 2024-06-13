<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\SubscriptionRepositoryInterface;
use App\Repositories\SubscriptionRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SubscriptionRepositoryInterface::class,SubscriptionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
