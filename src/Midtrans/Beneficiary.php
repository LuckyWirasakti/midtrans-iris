<?php

namespace Wirasakti\Iris\Midtrans;

use Wirasakti\Iris\Core\Iris;

class Beneficiary extends Iris
{
    private $endpoint;
    private $url;

    public function __construct() {
        $this->url = config('iris.url');
        $this->endpoint = 'beneficiaries';
    }

    public function list()
    {
        return $this->client()->get($this->url. $this->endpoint);
    }

    public function createBeneficiary($data)
    {
        return $this->client()->post($this->url. $this->endpoint, $data);
    }

    public function updateBeneficiary($alias_name, $data)
    {
        return $this->client()->patch($this->url. $this->endpoint. '/'. $alias_name, $data);
    }
}
