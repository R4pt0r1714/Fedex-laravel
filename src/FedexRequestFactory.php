<?php
namespace R4pt0r1714\Fedex;

class FedexRequestFactory {

    public static function GET_REQUEST($type)
    {
        switch($type){
            case "RATE":
              return new FedexRateRequest();
            break;
        }
    }
}
