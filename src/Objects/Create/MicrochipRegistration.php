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
    public $animalId = null;

    /**
     * Microchip number
     *
     * @var string
     */
    public $microchipNumber = null;

    /**
     * Microchip vendor
     *
     * @var string
     */
    public $microchipVendor = null;

    /**
     * Registry
     *
     * @var string
     */
    public $registry = null;

    /**
     * First name
     *
     * @var string
     */
    public $registrantFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $registrantLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    public $registrantAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $registrantCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $registrantState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $registrantPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    public $registrantCountry = null;

    /**
     * Primary phone number
     *
     * @var string
     */
    public $registrantPrimaryPhone = null;

    /**
     * Secondary phone number
     *
     * @var string
     */
    public $registrantSecondaryPhone = null;

    /**
     * Primary email address
     *
     * @var string
     */
    public $registrantPrimaryEmail = null;

    /**
     * Secondary email address
     *
     * @var string
     */
    public $registrantSecondaryEmail = null;


    /**
     * MicrochipRegistration Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->microchipRegistrationAnimalID)) $this->animalId = $inputData->microchipRegistrationAnimalID;
        if (!empty($inputData->microchipRegistrationMicrochipNumber)) $this->microchipNumber = $inputData->microchipRegistrationMicrochipNumber;
        if (!empty($inputData->microchipRegistrationMicrochipVendor)) $this->microchipVendor = $inputData->microchipRegistrationMicrochipVendor;
        if (!empty($inputData->microchipRegistrationRegistry)) $this->registry = $inputData->microchipRegistrationRegistry;
        if (!empty($inputData->microchipRegistrationRegistrantFirstname)) $this->registrantFirstname = $inputData->microchipRegistrationRegistrantFirstname;
        if (!empty($inputData->microchipRegistrationRegistrantLastname)) $this->registrantLastname = $inputData->microchipRegistrationRegistrantLastname;
        if (!empty($inputData->microchipRegistrationRegistrantAddress)) $this->registrantAddress = $inputData->microchipRegistrationRegistrantAddress;
        if (!empty($inputData->microchipRegistrationRegistrantCity)) $this->registrantCity = $inputData->microchipRegistrationRegistrantCity;
        if (!empty($inputData->microchipRegistrationRegistrantState)) $this->registrantState = $inputData->microchipRegistrationRegistrantState;
        if (!empty($inputData->microchipRegistrationRegistrantPostalcode)) $this->registrantPostalcode = $inputData->microchipRegistrationRegistrantPostalcode;
        if (!empty($inputData->microchipRegistrationRegistrantCountry)) $this->registrantCountry = $inputData->microchipRegistrationRegistrantCountry;
        if (!empty($inputData->microchipRegistrationRegistrantPrimaryPhone)) $this->registrantPrimaryPhone = $inputData->microchipRegistrationRegistrantPrimaryPhone;
        if (!empty($inputData->microchipRegistrationRegistrantSecondaryPhone)) $this->registrantSecondaryPhone = $inputData->microchipRegistrationRegistrantSecondaryPhone;
        if (!empty($inputData->microchipRegistrationRegistrantPrimaryEmail)) $this->registrantPrimaryEmail = $inputData->microchipRegistrationRegistrantPrimaryEmail;
        if (!empty($inputData->microchipRegistrationRegistrantSecondaryEmail)) $this->registrantSecondaryEmail = $inputData->microchipRegistrationRegistrantSecondaryEmail;
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
        if ($includeId && $this->animalId !== null) $output['microchipRegistrationAnimalID'] = $this->animalId;
        if ($this->microchipNumber !== null) $output['microchipRegistrationMicrochipNumber'] = $this->microchipNumber;
        if ($this->microchipVendor !== null) $output['microchipRegistrationMicrochipVendor'] = $this->microchipVendor;
        if ($this->registry !== null) $output['microchipRegistrationRegistry'] = $this->registry;
        if ($this->registrantFirstname !== null) $output['microchipRegistrationRegistrantFirstname'] = $this->registrantFirstname;
        if ($this->registrantLastname !== null) $output['microchipRegistrationRegistrantLastname'] = $this->registrantLastname;
        if ($this->registrantAddress !== null) $output['microchipRegistrationRegistrantAddress'] = $this->registrantAddress;
        if ($this->registrantCity !== null) $output['microchipRegistrationRegistrantCity'] = $this->registrantCity;
        if ($this->registrantState !== null) $output['microchipRegistrationRegistrantState'] = $this->registrantState;
        if ($this->registrantPostalcode !== null) $output['microchipRegistrationRegistrantPostalcode'] = $this->registrantPostalcode;
        if ($this->registrantCountry !== null) $output['microchipRegistrationRegistrantCountry'] = $this->registrantCountry;
        if ($this->registrantPrimaryPhone !== null) $output['microchipRegistrationRegistrantPrimaryPhone'] = $this->registrantPrimaryPhone;
        if ($this->registrantSecondaryPhone !== null) $output['microchipRegistrationRegistrantSecondaryPhone'] = $this->registrantSecondaryPhone;
        if ($this->registrantPrimaryEmail !== null) $output['microchipRegistrationRegistrantPrimaryEmail'] = $this->registrantPrimaryEmail;
        if ($this->registrantSecondaryEmail !== null) $output['microchipRegistrationRegistrantSecondaryEmail'] = $this->registrantSecondaryEmail;

        return $output;
    }
}