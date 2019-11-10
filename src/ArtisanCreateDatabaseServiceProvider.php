<?php

namespace Darkroots\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanCreateDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.darkroots.artisan-create-database',function($app){
            return $app['Darkroots\Commands\CreateDatabaseCommand'];
        });

        $this->commands('command.darkroots.artisan-create-database');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
