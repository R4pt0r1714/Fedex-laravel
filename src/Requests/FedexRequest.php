<?php

namespace R4pt0r1714\Fedex\Requests;

use R4pt0r1714\Fedex\Components\FedexConfiguration;

abstract class FedexRequest{

    protected $request;

    protected $key;
    protected $password;
    protected $acNumber;
    protected $meterNumber;

    public function __construct(FedexConfiguration $config)
    {
        $this->request = array();

        $this->key = $config->get_key();
        $this->password = $config->get_password();
        $this->acNumber = $config->get_acNumber();
        $this->meterNumber = $config->get_meterNumber();
        $this->countryCode = $config->get_countryCode();

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
