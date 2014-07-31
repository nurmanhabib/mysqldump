<?php namespace Nurmanhabib\Mysqldump;

use Illuminate\Support\ServiceProvider;

class MysqldumpServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('mysqldump', function()
        {
            return new Mysqldump;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Mysqldump', 'Nurmanhabib\Mysqldump\Facades\Mysqldump');
        });
    }

}