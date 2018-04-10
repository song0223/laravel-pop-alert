<?php

namespace Bacao\Alert;

use Illuminate\Support\ServiceProvider;

class AlertProvider extends ServiceProvider
{

    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'bcalert');
        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/bcalert'),
        ]);
        $this->publishes([
            __DIR__.'/../../assets' => public_path('vendor/bcalert'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Bacao\Alert\SessionStore',
            'Bacao\Alert\LaravelSessionStore'
        );

        $this->app->singleton('bcalert',function(){
            return $this->app->make('Bacao\Alert\AlertNotifier');
        });
    }
}
