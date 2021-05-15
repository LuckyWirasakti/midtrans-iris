<?php

namespace Wirasakti\Iris\Builder;

use Wirasakti\Iris\Midtrans\Transaction;

class TransactionBuilder
{
    private $transaction;

    public function __construct() {
        $this->transaction = new Transaction;
    }

    public function setFromDate($value)
    {
        $this->transaction->setFromDate($value);
        return $this;
    }

    public function setToDate($value)
    {
        $this->transaction->setToDate($value);
        return $this;
    }

    public function history()
    {
        return $this->transaction->history();
    }
}
