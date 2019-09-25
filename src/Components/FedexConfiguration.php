<?php

namespace R4pt0r1714\Fedex\Components;

class FedexConfiguration {

    private $key;
    private $password;
    private $acNumber;
    private $meterNumber;
    private $countryCode;

    public function set_key($key)
    {
        $this->key = $key;
    }

    public function get_key()
    {
        return $this->key;
    }

    public function set_password($password)
    {
        $this->password = $password;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_acNumber($acNumber)
    {
        $this->acNumber = $acNumber;
    }

    public function get_acNumber()
    {
        return $this->acNumber;
    }

    public function set_meterNumber($meterNumber)
    {
        $this->meterNumber = $meterNumber;
    }

    public function get_meterNumber()
    {
        return $this->meterNumber;
    }

    public function set_countryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function get_countryCode()
    {
        return $this->countryCode;
    }
}
