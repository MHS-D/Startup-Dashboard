<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use JavaScript;
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
        JavaScript::put([
            'animationInClass' => config('settings.animation.animationInClass'),
            'animationOutClass' => config('settings.animation.animationOutClass'),
            'timer' => config('settings.animation.timer'),
        ]);

        Schema::defaultStringLength(191);
    }
}
