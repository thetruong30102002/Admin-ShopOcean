<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    protected $binDings = [
        'App\Services\Interfaces\UserServiceInterface' =>
        'App\Services\UserService',
        'App\Repositories\Interfaces\UserRepositoryInterface' =>
        'App\Repositories\UserRepository',
        'App\Repositories\Interfaces\ProvinceRepositoryInterface' =>
        'App\Repositories\ProvinceRepository',
        'App\Repositories\Interfaces\DistrictRepositoryInterface' =>
        'App\Repositories\DistrictRepository',
        'App\Repositories\Interfaces\WardRepositoryInterface' =>
        'App\Repositories\WardRepository',
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->binDings as $key => $val) {
            $this->app->bind($key, $val);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
