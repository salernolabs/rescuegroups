<?php
/**
 * Location Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\Location;

class Location
{
    /**
     * Name
     * @var string
     */
    public $locationName;

    /**
     * Web address
     * @var string
     */
    public $locationUrl;

    /**
     * Street address
     * @var string
     */
    public $locationAddress;

    /**
     * City
     * @var string
     */
    public $locationCity;

    /**
     * State/Province
     * @var string
     */
    public $locationState;

    /**
     * Postal Code
     * @var string
     */
    public $locationPostalcode;

    /**
     * Country
     * @var integer
     */
    public $locationCountry;

    /**
     * Phone
     * @var string
     */
    public $locationPhone;

    /**
     * Phone extension
     * @var string
     */
    public $locationPhoneExt;



    /**
     * Locations Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->locationName)) $this->locationName = $inputData->locationName;
        if (!empty($inputData->locationUrl)) $this->locationUrl = $inputData->locationUrl;
        if (!empty($inputData->locationAddress)) $this->locationAddress = $inputData->locationAddress;
        if (!empty($inputData->locationCity)) $this->locationCity = $inputData->locationCity;
        if (!empty($inputData->locationState)) $this->locationState = $inputData->locationState;
        if (!empty($inputData->locationPostalcode)) $this->locationPostalcode = $inputData->locationPostalcode;
        if (!empty($inputData->locationCountry)) $this->locationCountry = $inputData->locationCountry;
        if (!empty($inputData->locationPhone)) $this->locationPhone = $inputData->locationPhone;
        if (!empty($inputData->locationPhoneExt)) $this->locationPhoneExt = $inputData->locationPhoneExt;

    }
}