<?php

namespace Filipac\IdeHelper;

use App;
use Config;
use Filipac\IdeHelper\Console\Commands\ModelsCommand;
use System\Classes\PluginBase;

/**
 * IdeHelper Plugin Information File.
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'IdeHelper',
            'description' => 'Make development easier with IDE helpers!',
            'author'      => 'Filipac',
            'icon'        => 'icon-code',
            'homepage'    => 'https://github.com/filipac/oc-idehelper-plugin',
        ];
    }

    public function boot()
    {
        Config::set('ide-helper', Config::get('filipac.idehelper::config'));
        App::register('\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');

        $this->app->singleton(
            'command.ide-helper.models',
            function ($app) {
                return new ModelsCommand($app['files']);
            }
        );

        $this->commands(
            'command.ide-helper.models',
        );
    }
}
