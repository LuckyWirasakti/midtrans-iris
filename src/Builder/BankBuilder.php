<?php

namespace Wirasakti\Iris\Builder;

use Wirasakti\Iris\Midtrans\Bank;

class BankBuilder
{
    private $bank;

    public function __construct() {
        $this->bank = new Bank;
    }

    public function setBank($value)
    {
        $this->bank->setBank($value);
        return $this;
    }

    public function setAccount($value)
    {
        $this->bank->setAccount($value);
        return $this;
    }

    public function validateAccount()
    {
        return $this->bank->validateAccount();
    }

    public function listBank()
    {
        return $this->bank->listBank();
    }
}
