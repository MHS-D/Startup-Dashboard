<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use JavaScript;
class AnimationServiceProvider extends ServiceProvider
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
        config()->set('settings.animation.animationInClass',request()->is('dashboard/*') ? 'animate__backInUp' : 'animate__bounceInLeft');//in
        config()->set('settings.animation.animationOutClass',request()->is('dashboard/*') ? 'animate__backOutDown' : 'animate__fadeOutTopRight');//out

        $main_animation = [
            'animationInClass' => config('settings.animation.animationInClass'),
            'animationOutClass' => config('settings.animation.animationOutClass'),
            'timer' => config('settings.animation.timer'),
        ];

        if(request()->is('dashboard/*'))
        {
            config()->set('settings.animation.navbarIn', 'animate__backInRight');//in
            config()->set('settings.animation.navbarOut', 'animate__backOutRight');//out
            config()->set('settings.animation.toolbarIn', 'animate__backInLeft');//in
            config()->set('settings.animation.toolbarOut', 'animate__backOutLeft');//out

        $dashboard_extra_animations = [
            'navbarIn' => config('settings.animation.navbarIn'),
            'navbarOut' => config('settings.animation.navbarOut'),
            'toolbarIn' => config('settings.animation.toolbarIn'),
            'toolbarOut' => config('settings.animation.toolbarOut'),
        ];

        }

        $data = isset($dashboard_extra_animations) ? array_merge($main_animation,$dashboard_extra_animations) : $main_animation;

        JavaScript::put($data);

    }
}
