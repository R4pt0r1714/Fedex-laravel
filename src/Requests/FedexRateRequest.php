<?php

namespace R4pt0r1714\Fedex\Requests;

use R4pt0r1714\Fedex\Components\Address;
use R4pt0r1714\Fedex\Components\Package;

class FedexRateRequest extends FedexRequest{

    protected $shipper;
    protected $recipient;
    protected $packageNumber;

    public function __construct($key, $password, $acNumber, $meterNumber, $countryCode){

        parent::__construct($key, $password, $acNumber, $meterNumber, $countryCode);

        $this->configVersionRequest();
        $this->configPayment();

        $this->packageNumber = 0;
    }

    private function configVersionRequest()
    {
        $this->request['Version'] = array(
          'ServiceId' => 'crs',
          'Major' => '24',
          'Intermediate' => '0',
          'Minor' => '0'
        );

        $this->request['RequestedShipment'] = array();
    }

    private function configPayment()
    {
        $this->request['RequestedShipment']['ShippingChargesPayment'] = array(
          'PaymentType' => 'SENDER',
            'Payor' => array(
            'ResponsibleParty' => array(
              'AccountNumber' => $this->acNumber,
              'Contact' => null,
              'Address' => array(
                'CountryCode' => $this->countryCode
              )
            )
          )
        );
    }

    public function setValue($key, $val)
    {
        $this->request['RequestedShipment'][$key] = $val;
    }

    public function getValue($key)
    {
        if(isset($this->request['RequestedShipment'][$key])){
            return $this->request['RequestedShipment'][$key];
        }

        return false;
    }

    public function setShipper(Address $shipper)
    {
        $this->request['RequestedShipment']['Shipper'] = $shipper->getAddressArray();
    }

    public function setRecipient(Address $recipient)
    {
        $this->request['RequestedShipment']['Recipient'] = $recipient->getAddressArray();
    }

    public function addPackage(Package $package)
    {
        $this->request['RequestedShipment']
                ['RequestedPackageLineItems'][$this->packageNumber] = $package->getPackageArray();

        $this->packageNumber +=1;

        return $this->packageNumber - 1;
    }

}
