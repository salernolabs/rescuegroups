<?php
/**
 * MicrochipRegistration Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\MicrochipRegistration;

class MicrochipRegistration
{
    /**
     * Animal
     * @var integer
     */
    public $microchipRegistrationAnimalID;

    /**
     * Microchip number
     * @var string
     */
    public $microchipRegistrationMicrochipNumber;

    /**
     * Microchip vendor
     * @var string
     */
    public $microchipRegistrationMicrochipVendor;

    /**
     * Registry
     * @var string
     */
    public $microchipRegistrationRegistry;

    /**
     * First name
     * @var string
     */
    public $microchipRegistrationRegistrantFirstname;

    /**
     * Last name
     * @var string
     */
    public $microchipRegistrationRegistrantLastname;

    /**
     * Street address
     * @var string
     */
    public $microchipRegistrationRegistrantAddress;

    /**
     * City
     * @var string
     */
    public $microchipRegistrationRegistrantCity;

    /**
     * State/Province
     * @var string
     */
    public $microchipRegistrationRegistrantState;

    /**
     * Postal Code
     * @var string
     */
    public $microchipRegistrationRegistrantPostalcode;

    /**
     * Country
     * @var integer
     */
    public $microchipRegistrationRegistrantCountry;

    /**
     * Primary phone number
     * @var string
     */
    public $microchipRegistrationRegistrantPrimaryPhone;

    /**
     * Secondary phone number
     * @var string
     */
    public $microchipRegistrationRegistrantSecondaryPhone;

    /**
     * Primary email address
     * @var string
     */
    public $microchipRegistrationRegistrantPrimaryEmail;

    /**
     * Secondary email address
     * @var string
     */
    public $microchipRegistrationRegistrantSecondaryEmail;



    /**
     * MicrochipRegistrations Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->microchipRegistrationAnimalID)) $this->microchipRegistrationAnimalID = $inputData->microchipRegistrationAnimalID;
        if (!empty($inputData->microchipRegistrationMicrochipNumber)) $this->microchipRegistrationMicrochipNumber = $inputData->microchipRegistrationMicrochipNumber;
        if (!empty($inputData->microchipRegistrationMicrochipVendor)) $this->microchipRegistrationMicrochipVendor = $inputData->microchipRegistrationMicrochipVendor;
        if (!empty($inputData->microchipRegistrationRegistry)) $this->microchipRegistrationRegistry = $inputData->microchipRegistrationRegistry;
        if (!empty($inputData->microchipRegistrationRegistrantFirstname)) $this->microchipRegistrationRegistrantFirstname = $inputData->microchipRegistrationRegistrantFirstname;
        if (!empty($inputData->microchipRegistrationRegistrantLastname)) $this->microchipRegistrationRegistrantLastname = $inputData->microchipRegistrationRegistrantLastname;
        if (!empty($inputData->microchipRegistrationRegistrantAddress)) $this->microchipRegistrationRegistrantAddress = $inputData->microchipRegistrationRegistrantAddress;
        if (!empty($inputData->microchipRegistrationRegistrantCity)) $this->microchipRegistrationRegistrantCity = $inputData->microchipRegistrationRegistrantCity;
        if (!empty($inputData->microchipRegistrationRegistrantState)) $this->microchipRegistrationRegistrantState = $inputData->microchipRegistrationRegistrantState;
        if (!empty($inputData->microchipRegistrationRegistrantPostalcode)) $this->microchipRegistrationRegistrantPostalcode = $inputData->microchipRegistrationRegistrantPostalcode;
        if (!empty($inputData->microchipRegistrationRegistrantCountry)) $this->microchipRegistrationRegistrantCountry = $inputData->microchipRegistrationRegistrantCountry;
        if (!empty($inputData->microchipRegistrationRegistrantPrimaryPhone)) $this->microchipRegistrationRegistrantPrimaryPhone = $inputData->microchipRegistrationRegistrantPrimaryPhone;
        if (!empty($inputData->microchipRegistrationRegistrantSecondaryPhone)) $this->microchipRegistrationRegistrantSecondaryPhone = $inputData->microchipRegistrationRegistrantSecondaryPhone;
        if (!empty($inputData->microchipRegistrationRegistrantPrimaryEmail)) $this->microchipRegistrationRegistrantPrimaryEmail = $inputData->microchipRegistrationRegistrantPrimaryEmail;
        if (!empty($inputData->microchipRegistrationRegistrantSecondaryEmail)) $this->microchipRegistrationRegistrantSecondaryEmail = $inputData->microchipRegistrationRegistrantSecondaryEmail;

    }
}