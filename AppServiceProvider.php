<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use TCG\Voyager\Listeners;
use Illuminate\Events\Dispatcher;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Voyager::addAction(\App\Actions\DuplicateAction::class);
    }
}
