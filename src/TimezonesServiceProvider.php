<?php

/**
 *
 * @author Loai N kanou <loai.net@gmail.com>
 */

namespace loaikanou\laratime;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/loaikanou/laratime')
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'laratime');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('loaikanou\laratime\TimezonesController');
    }
}
