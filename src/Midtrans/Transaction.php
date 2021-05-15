<?php

namespace Wirasakti\Iris\Midtrans;

use Wirasakti\Iris\Core\Iris;

class Transaction extends Iris
{
    private $from_date;
    private $to_date;
    private $url;

    public function __construct() {
        $this->url = config('iris.url');
    }

    public function setFromDate($value)
    {
        return $this->from_date = $value;
    }

    public function getFromDate()
    {
        return $this->from_date;
    }

    public function setToDate($value)
    {
        $this->to_date = $value;
    }

    public function getToDate()
    {
        return $this->to_date;
    }

    public function history()
    {
        return $this->client()->get($this->url.'statements', [
            'from_date' => $this->getFromDate(),
            'to_date' => $this->getToDate()
        ]);
    }
}
