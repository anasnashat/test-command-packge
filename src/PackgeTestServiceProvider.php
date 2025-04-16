<?php

namespace PackgeTest;

use Illuminate\Support\ServiceProvider;
use PackgeTest\Commands\MakeCrud;
use PackgeTest\Commands\MakeModelRelation;
use PackgeTest\Commands\SyncModelRelations;

class PackgeTestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeCrud::class,
                MakeModelRelation::class,
                SyncModelRelations::class,
            ]);
        }
    }
}