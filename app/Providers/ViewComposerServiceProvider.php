<?php
namespace PlatziPHP\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;
use PlatziPHP\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider{
    
    public function boot(Factory $factory)
    {
        $factory->composer('*', CurrentUserComposer::class);        
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
}