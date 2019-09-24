<?php

namespace R4pt0r1714\Feder\Components;

class Contact {

    private $fedexContact;

    private $name;
    private $company;
    private $phoneNumber;

    public function __construct()
    {
        $this->fedexContact['Contact'] = array()
    }

    public function getContactArray()
    {
        return $this->fedexContact;
    }

    public function setName($value)
    {
        $this->name = $value;
        $this->fedexContact['Contact']['PersonName'] = $value;
    }

    public function setCompany($value)
    {
        $this->company = $value;
        $this->fedexContact['Contact']['CompanyName'] = $value;
    }

    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
        $this->fedexContact['Contact']['PhoneNumber'] = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCompany()
    {
        return $this->company;
    }

    public function setPhoneNumber()
    {
        return $this->phoneNumber;
    }


}
