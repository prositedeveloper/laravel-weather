<?php 

namespace Prositedeveloper\LaravelWeather\Providers;

use Illuminate\Support\ServiceProvider;
use Prositedeveloper\LaravelWeather\Weather;

class WeatherServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Weather::class, function ($app) {
            return new Weather();
        });

        $this->publishes([
            __DIR__.'/../../config/weather.php' => config_path('weather.php'),
        ], 'weather');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'weather');
    }
}