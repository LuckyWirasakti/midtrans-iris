<?php

namespace Wirasakti\Iris\Midtrans;

use Wirasakti\Iris\Core\Iris;

class Payout extends Iris
{
    private $url;
    private $endpoint;

    public function __construct() {
        $this->url = config('iris.url');
        $this->endpoint = 'payouts';
    }

    public function detailPayout($reference_no)
    {
        return $this->client()->get($this->url. $this->endpoint. '/' . $reference_no);
    }

    public function createPayout($data)
    {
        return $this->client()->post($this->url. $this->endpoint, $data);
    }

    public function approvePayout($data)
    {
        return $this->client('approver')->post($this->url. $this->endpoint. '/approve', $data);
    }

    public function rejectPayout($data)
    {
        return $this->client('approver')->post($this->url. $this->endpoint. '/reject', $data);
    }
}
