<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(191); //Update defaultStringLength

>>>>>>> 958a356ba33085832c540238468e9d001291654a
    }
}
