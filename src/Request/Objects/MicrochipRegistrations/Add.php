<?php
/**
 * MicrochipRegistrations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     *
     * @var integer
     */
    private $microchipRegistrationAnimalID = null;

    /**
     * Microchip number
     *
     * @var string
     */
    private $microchipRegistrationMicrochipNumber = null;

    /**
     * Microchip vendor
     *
     * @var string
     */
    private $microchipRegistrationMicrochipVendor = null;

    /**
     * Registry
     *
     * @var string
     */
    private $microchipRegistrationRegistry = null;

    /**
     * First name
     *
     * @var string
     */
    private $microchipRegistrationRegistrantFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    private $microchipRegistrationRegistrantLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    private $microchipRegistrationRegistrantAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $microchipRegistrationRegistrantCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $microchipRegistrationRegistrantState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $microchipRegistrationRegistrantPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    private $microchipRegistrationRegistrantCountry = null;

    /**
     * Primary phone number
     *
     * @var string
     */
    private $microchipRegistrationRegistrantPrimaryPhone = null;

    /**
     * Secondary phone number
     *
     * @var string
     */
    private $microchipRegistrationRegistrantSecondaryPhone = null;

    /**
     * Primary email address
     *
     * @var string
     */
    private $microchipRegistrationRegistrantPrimaryEmail = null;

    /**
     * Secondary email address
     *
     * @var string
     */
    private $microchipRegistrationRegistrantSecondaryEmail = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setMicrochipRegistrationAnimalID($value)
    {
        $this->microchipRegistrationAnimalID = $value;

        return $this;
    }

    /**
     * Set Microchip number
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationMicrochipNumber($value)
    {
        $this->microchipRegistrationMicrochipNumber = $value;

        return $this;
    }

    /**
     * Set Microchip vendor
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationMicrochipVendor($value)
    {
        $this->microchipRegistrationMicrochipVendor = $value;

        return $this;
    }

    /**
     * Set Registry
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistry($value)
    {
        $this->microchipRegistrationRegistry = $value;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantFirstname($value)
    {
        $this->microchipRegistrationRegistrantFirstname = $value;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantLastname($value)
    {
        $this->microchipRegistrationRegistrantLastname = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantAddress($value)
    {
        $this->microchipRegistrationRegistrantAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantCity($value)
    {
        $this->microchipRegistrationRegistrantCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantState($value)
    {
        $this->microchipRegistrationRegistrantState = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPostalcode($value)
    {
        $this->microchipRegistrationRegistrantPostalcode = $value;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantCountry($value)
    {
        $this->microchipRegistrationRegistrantCountry = $value;

        return $this;
    }

    /**
     * Set Primary phone number
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPrimaryPhone($value)
    {
        $this->microchipRegistrationRegistrantPrimaryPhone = $value;

        return $this;
    }

    /**
     * Set Secondary phone number
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantSecondaryPhone($value)
    {
        $this->microchipRegistrationRegistrantSecondaryPhone = $value;

        return $this;
    }

    /**
     * Set Primary email address
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantPrimaryEmail($value)
    {
        $this->microchipRegistrationRegistrantPrimaryEmail = $value;

        return $this;
    }

    /**
     * Set Secondary email address
     *
     * @param string $value
     * @return $this
     */
    public function setMicrochipRegistrationRegistrantSecondaryEmail($value)
    {
        $this->microchipRegistrationRegistrantSecondaryEmail = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->microchipRegistrationAnimalID !== null) $parameterArray['values'][] = ["microchipRegistrationAnimalID"=>$this->microchipRegistrationAnimalID];
        if ($this->microchipRegistrationMicrochipNumber !== null) $parameterArray['values'][] = ["microchipRegistrationMicrochipNumber"=>$this->microchipRegistrationMicrochipNumber];
        if ($this->microchipRegistrationMicrochipVendor !== null) $parameterArray['values'][] = ["microchipRegistrationMicrochipVendor"=>$this->microchipRegistrationMicrochipVendor];
        if ($this->microchipRegistrationRegistry !== null) $parameterArray['values'][] = ["microchipRegistrationRegistry"=>$this->microchipRegistrationRegistry];
        if ($this->microchipRegistrationRegistrantFirstname !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantFirstname"=>$this->microchipRegistrationRegistrantFirstname];
        if ($this->microchipRegistrationRegistrantLastname !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantLastname"=>$this->microchipRegistrationRegistrantLastname];
        if ($this->microchipRegistrationRegistrantAddress !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantAddress"=>$this->microchipRegistrationRegistrantAddress];
        if ($this->microchipRegistrationRegistrantCity !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantCity"=>$this->microchipRegistrationRegistrantCity];
        if ($this->microchipRegistrationRegistrantState !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantState"=>$this->microchipRegistrationRegistrantState];
        if ($this->microchipRegistrationRegistrantPostalcode !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantPostalcode"=>$this->microchipRegistrationRegistrantPostalcode];
        if ($this->microchipRegistrationRegistrantCountry !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantCountry"=>$this->microchipRegistrationRegistrantCountry];
        if ($this->microchipRegistrationRegistrantPrimaryPhone !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantPrimaryPhone"=>$this->microchipRegistrationRegistrantPrimaryPhone];
        if ($this->microchipRegistrationRegistrantSecondaryPhone !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantSecondaryPhone"=>$this->microchipRegistrationRegistrantSecondaryPhone];
        if ($this->microchipRegistrationRegistrantPrimaryEmail !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantPrimaryEmail"=>$this->microchipRegistrationRegistrantPrimaryEmail];
        if ($this->microchipRegistrationRegistrantSecondaryEmail !== null) $parameterArray['values'][] = ["microchipRegistrationRegistrantSecondaryEmail"=>$this->microchipRegistrationRegistrantSecondaryEmail];
    }
}