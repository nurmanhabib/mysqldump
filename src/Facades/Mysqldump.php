<?php namespace Nurmanhabib\Mysqldump\Facades;

use Illuminate\Support\Facades\Facade;

class Mysqldump extends Facade {

    public function getFacadeAccessor() { return 'mysqldump'; }

}