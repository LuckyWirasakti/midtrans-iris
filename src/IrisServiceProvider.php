<?php

namespace Wirasakti\Iris;

use Illuminate\Support\ServiceProvider;

class IrisServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/iris.php', 'iris'
        );

        $this->app->singleton('bank', function(){
            return new \Wirasakti\Iris\Builder\BankBuilder;
        });

        $this->app->singleton('transaction', function(){
            return new \Wirasakti\Iris\Builder\TransactionBuilder;
        });

        $this->app->singleton('beneficiary', function(){
            return new \Wirasakti\Iris\Midtrans\Beneficiary;
        });

        $this->app->singleton('payout', function(){
            return new \Wirasakti\Iris\Midtrans\Payout;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/iris.php' => config_path('iris.php'),
        ]);
    }
}
