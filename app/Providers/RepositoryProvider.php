<?php

namespace App\Providers;

use App\Repository\StoreRepository;
use App\Repository\StudentRepository;
use App\Store;
use App\Student;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StudentRepository::class, function ($app) {
            return new StudentRepository(new Student());
        });
    }
}
