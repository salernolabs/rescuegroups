<?php
/**
 * Locations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Locations;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $locationName = null;

    /**
     * Web address
     *
     * @var string
     */
    private $locationUrl = null;

    /**
     * Street address
     *
     * @var string
     */
    private $locationAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $locationCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $locationState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $locationPostalcode = null;

    /**
     * Country
     *
     * @var integer
     */
    private $locationCountry = null;

    /**
     * Phone
     *
     * @var string
     */
    private $locationPhone = null;

    /**
     * Phone extension
     *
     * @var string
     */
    private $locationPhoneExt = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setLocationName($value)
    {
        $this->locationName = $value;

        return $this;
    }

    /**
     * Set Web address
     *
     * @param string $value
     * @return $this
     */
    public function setLocationUrl($value)
    {
        $this->locationUrl = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setLocationAddress($value)
    {
        $this->locationAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setLocationCity($value)
    {
        $this->locationCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setLocationState($value)
    {
        $this->locationState = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setLocationPostalcode($value)
    {
        $this->locationPostalcode = $value;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $value
     * @return $this
     */
    public function setLocationCountry($value)
    {
        $this->locationCountry = $value;

        return $this;
    }

    /**
     * Set Phone
     *
     * @param string $value
     * @return $this
     */
    public function setLocationPhone($value)
    {
        $this->locationPhone = $value;

        return $this;
    }

    /**
     * Set Phone extension
     *
     * @param string $value
     * @return $this
     */
    public function setLocationPhoneExt($value)
    {
        $this->locationPhoneExt = $value;

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
        return 'locations';
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

        if ($this->locationName !== null) $parameterArray['values'][] = ["locationName"=>$this->locationName];
        if ($this->locationUrl !== null) $parameterArray['values'][] = ["locationUrl"=>$this->locationUrl];
        if ($this->locationAddress !== null) $parameterArray['values'][] = ["locationAddress"=>$this->locationAddress];
        if ($this->locationCity !== null) $parameterArray['values'][] = ["locationCity"=>$this->locationCity];
        if ($this->locationState !== null) $parameterArray['values'][] = ["locationState"=>$this->locationState];
        if ($this->locationPostalcode !== null) $parameterArray['values'][] = ["locationPostalcode"=>$this->locationPostalcode];
        if ($this->locationCountry !== null) $parameterArray['values'][] = ["locationCountry"=>$this->locationCountry];
        if ($this->locationPhone !== null) $parameterArray['values'][] = ["locationPhone"=>$this->locationPhone];
        if ($this->locationPhoneExt !== null) $parameterArray['values'][] = ["locationPhoneExt"=>$this->locationPhoneExt];
    }
}