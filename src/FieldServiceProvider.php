<?php

namespace Skydiver\NovaCachedImages;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-cached-images', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-cached-images', __DIR__.'/../dist/css/field.css');
        });

        $this->app->booted(function () {
            $this->routes();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register the field's routes.
     *
     * @return void
     */
    protected function routes()
    {
        Route::middleware(['nova'])
            ->prefix('nova-vendor/skydiver/nova-cached-images')
            ->group(__DIR__.'/../routes/api.php');
    }

}
