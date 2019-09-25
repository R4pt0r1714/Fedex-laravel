<?php

namespace R4pt0r1714\Fedex\Components;

class Package {

    private $fedexPackage;

    private $groupPackageCount;
    private $packageNumber;

    private $weight;
    private $weightUnits;

    private $dimensionUnist;
    private $lenght;
    private $width;
    private $height;

    public function __construc($packageNumber)
    {
        $this->packageNumber = $packageNumber;

        $this->fedexPackage['SequenceNumber'] = $this->packageNumber;
        $this->fedexPackage['Weight'] = array();
        $this->fedexPackage['Dimensions'] = array();

        $this->weightUnits = 'KG';
        $this->fedexPackage['Weight']['Units'] = 'KG';

        $this->dimensionUnist = 'CM';
        $this->fedexPackage['Dimensions']['Units'] = 'CM';
    }

    public function getPackageArray()
    {
        return $this->fedexPackage;
    }

    public function setWeight($value, $units = null)
    {
        if(!is_null($units)) {
            $this->weightUnits = $units;
            $this->fedexPackage['Weight']['Units'] = $units;
        }

        $this->weight = $value;
        $this->fedexPackage['Weight']['Value'] = $value;
    }

    public function setDimensions($lenght, $width, $height, $units = null)
    {
        if(!is_null($units)){
            $this->dimensionUnist = $units;
            $this->fedexPackage['Dimensions']['Units'] = $units;
        }

        $this->lenght = $lenght;
        $this->fedexPackage['Dimensions']['Lenght'] = $lenght;

        $this->width = $width;
        $this->fedexPackage['Dimensions']['Width'] = $width;

        $this->height = $height;
        $this->fedexPackage['Dimensions']['Height'] = $height;
    }

    public function getWeight()
    {
        return [$this->weight, $this->weightUnits];
    }

    public function getDimensions()
    {
        return [$this->lenght, $this->width, $this->height, $this->dimensionUnist];
    }

}
