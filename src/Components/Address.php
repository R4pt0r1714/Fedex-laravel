<?php

namespace R4pt0r1714\Fedex\Components;

class Address {

    private $fedexAddress

    private $streetLines;
    private $city;
    private $stateCode;
    private $postalCode;
    private $countryCode;
    private $residential;

    public function __construct()
    {
        $this->fedexAddress['Address'] = array();
        $this->fedexAddress['Address']['Residential'] = false;
    }

    public function getAddressArray()
    {
        return $this->fedexAddress;
    }

    public function setStreetLine($value)
    {
        $this->streetLines = $value;
        $this->fedexAddress['Address']['StreetLines'] = array($value);
    }

    public function setCity($value)
    {
        $this->city = $value;
        $this->fedexAddress['Address']['City'] = $value;
    }

    public function setStateCode($value)
    {
        $this->stateCode = $value;
        $this->fedexAddress['Address']['StateOrProvinceCode'] = $value;
    }

    public function setPostalCode($value)
    {
        $this->postalCode = $value;
        $this->fedexAddress['Address']['PostalCode'] = $value;
    }

    public function setCountryCode($value)
    {
        $this->countryCode = $value;
        $fedexAddress['Address']['CountryCode'] = $value;
    }

    public function setResidential($value)
    {
        $this->residential = $value;
        $this->fedexAddress['Address']['Residential'] = $value;
    }

    public function getStreetLine()
    {
        return $streetLines;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStateCode()
    {
        return $this->stateCode;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function getResidential()
    {
        return $this->residential;
    }
}
