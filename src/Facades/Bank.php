<?php

namespace Wirasakti\Iris\Facades;

use Illuminate\Support\Facades\Facade;

class Bank extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bank';
    }
}
