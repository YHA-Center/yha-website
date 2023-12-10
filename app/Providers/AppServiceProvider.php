<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Add your additional migration paths here
        $this->loadMigrationsFrom(base_path('database/migrations/master'));

        // Adjust the namespace if needed
        $this->loadMigrationsFrom(base_path('database/migrations/master'), 'master');
    }
}
