<?php

namespace Wirasakti\Iris\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Wirasakti\Iris\IrisServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Beneficiary' => \Wirasakti\Iris\Facades\Beneficiary::class,
            'Payout' => \Wirasakti\Iris\Facades\Payout::class,
            'Iris' => \Wirasakti\Iris\Facades\Iris::class,
            'Tool' => \Wirasakti\Iris\Facades\Tool::class
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {

    }
}
