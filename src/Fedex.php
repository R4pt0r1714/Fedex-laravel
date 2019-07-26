<?php

namespace R4pt0r1714\Fedex;

class Fedex {

  private $client;

  public static function getServiceClient(string $service){
      $wsdl = $this.getServiceWSDL($service);

      $client = new FedexClient($wsdl);
      return $client;
  }
  

  private function getServiceWSDL(string $service){

      $wsdl = null;

      switch ($service) {
        case 'PICKUP_SERVICE':
          $wsdl = "./WSDL/PickupService/PickupService_v17.wsdl";
          break;

        case 'RATE_SERVICE':
            $wsdl = "./WSDL/RateService/RateService_v24.wsdl";
            break;

        case 'SHIP_SERVICE':
            $wsdl = "./WSDL/ShipService/ShipService_v23.wsdl";
            break;

        case 'TRACK_SERVICE':
            $wsdl = "./WSDL/TrackService/TrackService_v16.wsdl";
            break;

        default:
          break;
      }

      return $wsdl;
  }

}
