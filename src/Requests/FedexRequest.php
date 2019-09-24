<?php

namespace R4pt0r1714\Fedex\Requests;

abstract class FedexRequest{

    protected $request;

    protected $key;
    protected $password;
    protected $acNumber;
    protected $meterNumber;

    public function __construct($key, $password, $acNumber, $meterNumber, $countryCode)
    {
        $this->request = array();

        $this->key = $key;
        $this->password = $password;
        $this->acNumber = $acNumber;
        $this->meterNumber = $meterNumber;
        $this->countryCode = $countryCode;

        $this->initializeRequest();
    }

    abstract function configVersionRequest();

    abstract function configPayment();

    abstract function setValue($key, $val);

    abstract function getValue($key);

    abstract function setShipper();

    abstract function seteRecipient();

    abstract function addPackage();

    protected function initializeRequest()
    {
        $this->request['WebAuthenticationDetail'] = array(
          'UserCredential' => array(
            'Key' => $this->key,
            'Password' => $this->password
          )
        );

        $this->request['ClientDetail'] = array(
          'AccountNumber' => $this->acNumber,
          'MeterNumber' => $this->meterNumber
        );
    }

    public function getArrayRequest()
    {
        return $this->request;
    }


}
