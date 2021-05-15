<?php

namespace Wirasakti\Iris\Midtrans;

use Wirasakti\Iris\Core\Iris;

class Bank extends Iris
{
    private $bank;
    private $account;
    private $url;

    public function __construct() {
        $this->url = config('iris.url');
    }

    public function setBank($value)
    {
        return $this->bank = $value;
    }

    public function getBank()
    {
        return $this->bank;
    }

    public function setAccount($value)
    {
        return $this->account = $value;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function validateAccount()
    {
        return $this->client()->get($this->url.'account_validation',[
            'bank' => $this->getBank(),
            'account' => $this->getAccount()
        ]);
    }

    public function listBank()
    {
        return $this->client()->get($this->url.'beneficiary_banks');
    }
}
