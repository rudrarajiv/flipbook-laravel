<?php

namespace rudrarajiv\laravel-flipbook;

use Illuminate\Support\ServiceProvider;

class FlipBookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'flipbook');

    $this->publishes([
        __DIR__.'/views' => base_path('resources/views/rudra/flipbook'),
    ]);


        $this->publishes([
            __DIR__.'/../assets' => public_path('/'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../migrations' => database_path('migrations'),
        ], 'migration');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('rudra\flipbook\FlipBookController');

    }
}
