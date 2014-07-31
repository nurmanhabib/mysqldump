<?php namespace Nurmanhabib\Mysqldump\Facades;

use Illuminate\Support\Facades\Facade;

class Mysqldump extends Facade {

    protected static function getFacadeAccessor() { return 'mysqldump'; }

}