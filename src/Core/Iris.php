<?php

namespace Wirasakti\Iris\Core;

use Illuminate\Support\Facades\Http;

class Iris
{
    protected function client($role=null)
    {
        if($role == 'approver') {
            return Http::withBasicAuth(
                config('iris.auth.approver.username'),
                config('iris.auth.approver.password')
            )->withHeaders([
                'Accept'  => 'application/json',
                'Content-Type' => 'application/json',
            ]);
        }

        return Http::withBasicAuth(
            config('iris.auth.creator.username'),
            config('iris.auth.creator.password')
        )->withHeaders([
            'Accept'  => 'application/json',
            'Content-Type' => 'application/json',
        ]);
    }
}
