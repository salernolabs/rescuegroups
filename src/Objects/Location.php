<?php
/**
 * Location Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Location
{
    /**
     * ID
     *
     * @var integer
     */
    public $locationID = null;

    /**
     * Name
     *
     * @var string
     */
    public $locationName = null;

    /**
     * Web address
     *
     * @var string
     */
    public $locationUrl = null;

    /**
     * Street address
     *
     * @var string
     */
    public $locationAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $locationCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $locationState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $locationPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    public $locationCountry = null;

    /**
     * Phone
     *
     * @var string
     */
    public $locationPhone = null;

    /**
     * Phone extension
     *
     * @var string
     */
    public $locationPhoneExt = null;


    /**
     * Location Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->locationID)) $this->locationID = $inputData->locationID;
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