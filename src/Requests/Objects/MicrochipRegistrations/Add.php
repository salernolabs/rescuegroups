<?php
/**
 * MicrochipRegistrations Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Requests\Objects\MicrochipRegistrations;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Animal
     * @var integer
     */
    private $microchipRegistrationAnimalID = null;

    /**
     * Microchip number
     * @var microchipnumber
     */
    private $microchipRegistrationMicrochipNumber = null;

    /**
     * Microchip vendor
     * @var string
     */
    private $microchipRegistrationMicrochipVendor = null;

    /**
     * Registry
     * @var string
     */
    private $microchipRegistrationRegistry = null;

    /**
     * First name
     * @var string
     */
    private $microchipRegistrationRegistrantFirstname = null;

    /**
     * Last name
     * @var string
     */
    private $microchipRegistrationRegistrantLastname = null;

    /**
     * Street address
     * @var string
     */
    private $microchipRegistrationRegistrantAddress = null;

    /**
     * City
     * @var string
     */
    private $microchipRegistrationRegistrantCity = null;

    /**
     * State/Province
     * @var province
     */
    private $microchipRegistrationRegistrantState = null;

    /**
     * Postal Code
     * @var string
     */
    private $microchipRegistrationRegistrantPostalcode = null;

    /**
     * Country
     * @var integer
     */
    private $microchipRegistrationRegistrantCountry = null;

    /**
     * Primary phone number
     * @var phone
     */
    private $microchipRegistrationRegistrantPrimaryPhone = null;

    /**
     * Secondary phone number
     * @var phone
     */
    private $microchipRegistrationRegistrantSecondaryPhone = null;

    /**
     * Primary email address
     * @var email
     */
    private $microchipRegistrationRegistrantPrimaryEmail = null;

    /**
     * Secondary email address
     * @var email
     */
    private $microchipRegistrationRegistrantSecondaryEmail = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'microchipRegistrations';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Set Animal
     *
     * @param integer $microchipRegistrationAnimalID
     * @return $this
     */
    public function setMicrochipRegistrationAnimalID($microchipRegistrationAnimalID)
    {
        $this->microchipRegistrationAnimalID = $microchipRegistrationAnimalID;

        return $this;
    }

    /**
     * Set Microchip number
     *
     * @param microchipnumber $microchipRegistrationMicrochipNumber
     * @return $this
     */
    public function setMicrochipRegistrationMicrochipNumber($microchipRegistrationMicrochipNumber)
    {
        $this->microchipRegistrationMicrochipNumber = $microchipRegistrationMicrochipNumber;

        return $this;
    }

    /**
     * Set Microchip vendor
     *
     * @param string $microchipRegistrationMicrochipVendor
     * @return $this
     */
    public function setMicrochipRegistrationMicrochipVendor($microchipRegistrationMicrochipVendor)
    {
        $this->microchipRegistrationMicrochipVendor = $microchipRegistrationMicrochipVendor;

        return $this;
    }

    /**
     * Set Registry
     *
     * @param string $microchipRegistrationRegistry
     * @return $this
     */
    public function setMicrochipRegistrationRegistry($microchipRegistrationRegistry)
    {
        $this->microchipRegistrationRegistry = $microchipRegistrationRegistry;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $microchipRegistrationRegistrantFirstname
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantFirstname($microchipRegistrationRegistrantFirstname)
    {
        $this->microchipRegistrationRegistrantFirstname = $microchipRegistrationRegistrantFirstname;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $microchipRegistrationRegistrantLastname
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantLastname($microchipRegistrationRegistrantLastname)
    {
        $this->microchipRegistrationRegistrantLastname = $microchipRegistrationRegistrantLastname;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $microchipRegistrationRegistrantAddress
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantAddress($microchipRegistrationRegistrantAddress)
    {
        $this->microchipRegistrationRegistrantAddress = $microchipRegistrationRegistrantAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $microchipRegistrationRegistrantCity
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantCity($microchipRegistrationRegistrantCity)
    {
        $this->microchipRegistrationRegistrantCity = $microchipRegistrationRegistrantCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param province $microchipRegistrationRegistrantState
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantState($microchipRegistrationRegistrantState)
    {
        $this->microchipRegistrationRegistrantState = $microchipRegistrationRegistrantState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $microchipRegistrationRegistrantPostalcode
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPostalcode($microchipRegistrationRegistrantPostalcode)
    {
        $this->microchipRegistrationRegistrantPostalcode = $microchipRegistrationRegistrantPostalcode;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $microchipRegistrationRegistrantCountry
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantCountry($microchipRegistrationRegistrantCountry)
    {
        $this->microchipRegistrationRegistrantCountry = $microchipRegistrationRegistrantCountry;

        return $this;
    }

    /**
     * Set Primary phone number
     *
     * @param phone $microchipRegistrationRegistrantPrimaryPhone
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPrimaryPhone($microchipRegistrationRegistrantPrimaryPhone)
    {
        $this->microchipRegistrationRegistrantPrimaryPhone = $microchipRegistrationRegistrantPrimaryPhone;

        return $this;
    }

    /**
     * Set Secondary phone number
     *
     * @param phone $microchipRegistrationRegistrantSecondaryPhone
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantSecondaryPhone($microchipRegistrationRegistrantSecondaryPhone)
    {
        $this->microchipRegistrationRegistrantSecondaryPhone = $microchipRegistrationRegistrantSecondaryPhone;

        return $this;
    }

    /**
     * Set Primary email address
     *
     * @param email $microchipRegistrationRegistrantPrimaryEmail
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPrimaryEmail($microchipRegistrationRegistrantPrimaryEmail)
    {
        $this->microchipRegistrationRegistrantPrimaryEmail = $microchipRegistrationRegistrantPrimaryEmail;

        return $this;
    }

    /**
     * Set Secondary email address
     *
     * @param email $microchipRegistrationRegistrantSecondaryEmail
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantSecondaryEmail($microchipRegistrationRegistrantSecondaryEmail)
    {
        $this->microchipRegistrationRegistrantSecondaryEmail = $microchipRegistrationRegistrantSecondaryEmail;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->microchipRegistrationAnimalID !== null) $parameterArray['microchipRegistrationAnimalID'] = $this->microchipRegistrationAnimalID;
        if ($this->microchipRegistrationMicrochipNumber !== null) $parameterArray['microchipRegistrationMicrochipNumber'] = $this->microchipRegistrationMicrochipNumber;
        if ($this->microchipRegistrationMicrochipVendor !== null) $parameterArray['microchipRegistrationMicrochipVendor'] = $this->microchipRegistrationMicrochipVendor;
        if ($this->microchipRegistrationRegistry !== null) $parameterArray['microchipRegistrationRegistry'] = $this->microchipRegistrationRegistry;
        if ($this->microchipRegistrationRegistrantFirstname !== null) $parameterArray['microchipRegistrationRegistrantFirstname'] = $this->microchipRegistrationRegistrantFirstname;
        if ($this->microchipRegistrationRegistrantLastname !== null) $parameterArray['microchipRegistrationRegistrantLastname'] = $this->microchipRegistrationRegistrantLastname;
        if ($this->microchipRegistrationRegistrantAddress !== null) $parameterArray['microchipRegistrationRegistrantAddress'] = $this->microchipRegistrationRegistrantAddress;
        if ($this->microchipRegistrationRegistrantCity !== null) $parameterArray['microchipRegistrationRegistrantCity'] = $this->microchipRegistrationRegistrantCity;
        if ($this->microchipRegistrationRegistrantState !== null) $parameterArray['microchipRegistrationRegistrantState'] = $this->microchipRegistrationRegistrantState;
        if ($this->microchipRegistrationRegistrantPostalcode !== null) $parameterArray['microchipRegistrationRegistrantPostalcode'] = $this->microchipRegistrationRegistrantPostalcode;
        if ($this->microchipRegistrationRegistrantCountry !== null) $parameterArray['microchipRegistrationRegistrantCountry'] = $this->microchipRegistrationRegistrantCountry;
        if ($this->microchipRegistrationRegistrantPrimaryPhone !== null) $parameterArray['microchipRegistrationRegistrantPrimaryPhone'] = $this->microchipRegistrationRegistrantPrimaryPhone;
        if ($this->microchipRegistrationRegistrantSecondaryPhone !== null) $parameterArray['microchipRegistrationRegistrantSecondaryPhone'] = $this->microchipRegistrationRegistrantSecondaryPhone;
        if ($this->microchipRegistrationRegistrantPrimaryEmail !== null) $parameterArray['microchipRegistrationRegistrantPrimaryEmail'] = $this->microchipRegistrationRegistrantPrimaryEmail;
        if ($this->microchipRegistrationRegistrantSecondaryEmail !== null) $parameterArray['microchipRegistrationRegistrantSecondaryEmail'] = $this->microchipRegistrationRegistrantSecondaryEmail;

    }
}