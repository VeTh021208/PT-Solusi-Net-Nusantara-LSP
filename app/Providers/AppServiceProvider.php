<?php

namespace App\Providers;

use App\Http\Responses\AdminLoginResponse;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
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
        // Login admin selalu diarahkan ke dashboard
        $this->app->bind(
            LoginResponse::class,
            AdminLoginResponse::class,
        );
    }
}
