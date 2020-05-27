<?php

namespace NickDeKruijk\LaravelSlider;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'slider');
        $this->publishes([
            __DIR__ . '/config.php' => config_path('slider.php'),
        ], 'config');
        if (config('slider.migration')) {
            $this->loadMigrationsFrom(__DIR__ . '/migrations/');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'slider');
    }
}
