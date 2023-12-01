<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalVariableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        view()->share('idst', 0); // Cambia 'nombreVariable' y 'valor' según tus necesidades
    }
}
