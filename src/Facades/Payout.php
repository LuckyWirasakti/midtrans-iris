<?php

namespace Wirasakti\Iris\Facades;

use Illuminate\Support\Facades\Facade;

class Payout extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'payout';
    }
}
