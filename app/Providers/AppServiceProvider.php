<?php

namespace App\Providers;

use App\Contracts\WeatherProvider;
use App\WeatherProviders\OpenWeather\OpenWeather;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(WeatherProvider::class, function (Application $app) {
            return new OpenWeather();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
