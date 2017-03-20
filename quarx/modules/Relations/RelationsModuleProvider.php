<?php

namespace Quarx\Modules\Relations;

use Illuminate\Routing\Router;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RelationsModuleProvider extends ServiceProvider
{
    public function boot(DispatcherContract $events, Router $router)
    {
        // Publishes
        $this->publishes([
            __DIR__.'/Publishes/app' => base_path('app'),
            __DIR__.'/Publishes/resources' => base_path('resources'),
            __DIR__.'/Routes/routes' => base_path('routes'),
        ]);

        // Load Routes
        $this->app->router->group(['middleware' => ['web']], function ($router) {
            require __DIR__.'/Routes/relations-frontend.php';
        });

        $this->app->router->group(['middleware' => ['api']], function ($router) {
            require __DIR__.'/Routes/relations-api.php';
        });


        // View namespace
        $this->app->view->addNamespace('relations', __DIR__.'/Views');

        // Configs
        $this->app->config->set('quarx.modules.relations', include(__DIR__.'/config.php'));
    }

    public function register()
    {
        // register as you please
    }
}