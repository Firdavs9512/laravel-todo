<?php

namespace App\Providers;

use App\Contracts\UserRepository as UserRepositoryContract;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\TodoRepository as TodoRepositoryContract;
use App\Repositories\TodoRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->containers as $interface => $concrete) {
            $this->app->bind($interface, $concrete);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private $containers = [
        UserRepositoryContract::class => UserRepository::class,
        TodoRepositoryContract::class => TodoRepository::class,
    ];
}
