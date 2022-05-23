<?php

namespace App\Providers;

use App\Models\User;
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
        config()->set('settings.animation.animationInClass',request()->is('dashboard/*') ? 'animate__backInUp' : 'animate__bounceInLeft');
        config()->set('settings.animation.animationOutClass',request()->is('dashboard/*') ? 'animate__backOutDown' : 'animate__fadeOutTopRight');

        JavaScript::put([
            'animationInClass' => config('settings.animation.animationInClass'),
            'animationOutClass' => config('settings.animation.animationOutClass'),
            'timer' => config('settings.animation.timer'),
        ]);

        Schema::defaultStringLength(191);
    }
}
