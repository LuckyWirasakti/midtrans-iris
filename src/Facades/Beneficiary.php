<?php

namespace Wirasakti\Iris\Facades;

use Illuminate\Support\Facades\Facade;

class Beneficiary extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'beneficiary';
    }
}
