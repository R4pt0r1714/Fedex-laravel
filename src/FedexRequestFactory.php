<?php
namespace R4pt0r1714\Fedex;

use R4pt0r1714\Fedex\Requests\FedexRateRequest;

class FedexRequestFactory {

    public static function GET_REQUEST($type, $config)
    {
        switch($type){
            case "RATE":
              return new FedexRateRequest($config);
            break;
        }
    }
}
