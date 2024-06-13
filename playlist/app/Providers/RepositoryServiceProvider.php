<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PlaylistRepositoryInterface;
use App\Repositories\PlaylistRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PlaylistRepositoryInterface::class,PlaylistRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
