<?php

namespace R4pt0r1714\Fedex;

use \SoapClient;

class FedexClient extends SoapClient{

    public function __construc(string $wsdl){
        parent::__construct($wsdl, array('trace' => 1));
    }

}
