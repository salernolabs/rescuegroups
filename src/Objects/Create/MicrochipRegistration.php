<?php
/**
 * MicrochipRegistration Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class MicrochipRegistration implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Animal, Primary Key
     *
     * @var integer
     */
    public $microchipRegistrationAnimalID = null;

    /**
     * Microchip number
     *
     * @var string
     */
    public $microchipRegistrationMicrochipNumber = null;

    /**
     * Microchip vendor
     *
     * @var string
     */
    public $microchipRegistrationMicrochipVendor = null;

    /**
     * Registry
     *
     * @var string
     */
    public $microchipRegistrationRegistry = null;

    /**
     * First name
     *
     * @var string
     */
    public $microchipRegistrationRegistrantFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $microchipRegistrationRegistrantLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    public $microchipRegistrationRegistrantAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $microchipRegistrationRegistrantCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $microchipRegistrationRegistrantState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $microchipRegistrationRegistrantPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    public $microchipRegistrationRegistrantCountry = null;

    /**
     * Primary phone number
     *
     * @var string
     */
    public $microchipRegistrationRegistrantPrimaryPhone = null;

    /**
     * Secondary phone number
     *
     * @var string
     */
    public $microchipRegistrationRegistrantSecondaryPhone = null;

    /**
     * Primary email address
     *
     * @var string
     */
    public $microchipRegistrationRegistrantPrimaryEmail = null;

    /**
     * Secondary email address
     *
     * @var string
     */
    public $microchipRegistrationRegistrantSecondaryEmail = null;


    /**
     * MicrochipRegistration Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

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

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->microchipRegistrationAnimalID !== null) $output['microchipRegistrationAnimalID'] = $this->microchipRegistrationAnimalID;
        if ($this->microchipRegistrationMicrochipNumber !== null) $output['microchipRegistrationMicrochipNumber'] = $this->microchipRegistrationMicrochipNumber;
        if ($this->microchipRegistrationMicrochipVendor !== null) $output['microchipRegistrationMicrochipVendor'] = $this->microchipRegistrationMicrochipVendor;
        if ($this->microchipRegistrationRegistry !== null) $output['microchipRegistrationRegistry'] = $this->microchipRegistrationRegistry;
        if ($this->microchipRegistrationRegistrantFirstname !== null) $output['microchipRegistrationRegistrantFirstname'] = $this->microchipRegistrationRegistrantFirstname;
        if ($this->microchipRegistrationRegistrantLastname !== null) $output['microchipRegistrationRegistrantLastname'] = $this->microchipRegistrationRegistrantLastname;
        if ($this->microchipRegistrationRegistrantAddress !== null) $output['microchipRegistrationRegistrantAddress'] = $this->microchipRegistrationRegistrantAddress;
        if ($this->microchipRegistrationRegistrantCity !== null) $output['microchipRegistrationRegistrantCity'] = $this->microchipRegistrationRegistrantCity;
        if ($this->microchipRegistrationRegistrantState !== null) $output['microchipRegistrationRegistrantState'] = $this->microchipRegistrationRegistrantState;
        if ($this->microchipRegistrationRegistrantPostalcode !== null) $output['microchipRegistrationRegistrantPostalcode'] = $this->microchipRegistrationRegistrantPostalcode;
        if ($this->microchipRegistrationRegistrantCountry !== null) $output['microchipRegistrationRegistrantCountry'] = $this->microchipRegistrationRegistrantCountry;
        if ($this->microchipRegistrationRegistrantPrimaryPhone !== null) $output['microchipRegistrationRegistrantPrimaryPhone'] = $this->microchipRegistrationRegistrantPrimaryPhone;
        if ($this->microchipRegistrationRegistrantSecondaryPhone !== null) $output['microchipRegistrationRegistrantSecondaryPhone'] = $this->microchipRegistrationRegistrantSecondaryPhone;
        if ($this->microchipRegistrationRegistrantPrimaryEmail !== null) $output['microchipRegistrationRegistrantPrimaryEmail'] = $this->microchipRegistrationRegistrantPrimaryEmail;
        if ($this->microchipRegistrationRegistrantSecondaryEmail !== null) $output['microchipRegistrationRegistrantSecondaryEmail'] = $this->microchipRegistrationRegistrantSecondaryEmail;

        return $output;
    }
}