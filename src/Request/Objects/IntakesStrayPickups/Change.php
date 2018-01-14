<?php
/**
 * IntakesStrayPickups Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Intake
     *
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $intakesStraypickupAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesStraypickupAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesStraypickupDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesStraypickupNotes = null;

    /**
     * Pickup Location
     *
     * @var string
     */
    private $intakesStraypickupLocation = null;

    /**
     * Pickup Street address
     *
     * @var string
     */
    private $intakesStraypickupAddress = null;

    /**
     * Pickup City
     *
     * @var string
     */
    private $intakesStraypickupCity = null;

    /**
     * Pickup State/Province
     *
     * @var string
     */
    private $intakesStraypickupState = null;

    /**
     * Pickup Postal Code
     *
     * @var string
     */
    private $intakesStraypickupPostalcode = null;

    /**
     * Found By
     *
     * @var integer
     */
    private $intakesStraypickupFinderID = null;

    /**
     * Pickup By
     *
     * @var integer
     */
    private $intakesStraypickupStaffID = null;


    /**
     * Set Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakeID($value)
    {
        $this->intakeID = $value;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupAnimalID($value)
    {
        $this->intakesStraypickupAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupAnimalConditionID($value)
    {
        $this->intakesStraypickupAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesStraypickupDate($value)
    {
        $this->intakesStraypickupDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupNotes($value)
    {
        $this->intakesStraypickupNotes = $value;

        return $this;
    }

    /**
     * Set Pickup Location
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupLocation($value)
    {
        $this->intakesStraypickupLocation = $value;

        return $this;
    }

    /**
     * Set Pickup Street address
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupAddress($value)
    {
        $this->intakesStraypickupAddress = $value;

        return $this;
    }

    /**
     * Set Pickup City
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupCity($value)
    {
        $this->intakesStraypickupCity = $value;

        return $this;
    }

    /**
     * Set Pickup State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupState($value)
    {
        $this->intakesStraypickupState = $value;

        return $this;
    }

    /**
     * Set Pickup Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraypickupPostalcode($value)
    {
        $this->intakesStraypickupPostalcode = $value;

        return $this;
    }

    /**
     * Set Found By
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupFinderID($value)
    {
        $this->intakesStraypickupFinderID = $value;

        return $this;
    }

    /**
     * Set Pickup By
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupStaffID($value)
    {
        $this->intakesStraypickupStaffID = $value;

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
        return 'intakesStraypickups';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'change';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakeID !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeID];
        if ($this->intakesStraypickupAnimalID !== null) $parameterArray['values'][] = ["intakesStraypickupAnimalID"=>$this->intakesStraypickupAnimalID];
        if ($this->intakesStraypickupAnimalConditionID !== null) $parameterArray['values'][] = ["intakesStraypickupAnimalConditionID"=>$this->intakesStraypickupAnimalConditionID];
        if ($this->intakesStraypickupDate !== null) $parameterArray['values'][] = ["intakesStraypickupDate"=>$this->intakesStraypickupDate];
        if ($this->intakesStraypickupNotes !== null) $parameterArray['values'][] = ["intakesStraypickupNotes"=>$this->intakesStraypickupNotes];
        if ($this->intakesStraypickupLocation !== null) $parameterArray['values'][] = ["intakesStraypickupLocation"=>$this->intakesStraypickupLocation];
        if ($this->intakesStraypickupAddress !== null) $parameterArray['values'][] = ["intakesStraypickupAddress"=>$this->intakesStraypickupAddress];
        if ($this->intakesStraypickupCity !== null) $parameterArray['values'][] = ["intakesStraypickupCity"=>$this->intakesStraypickupCity];
        if ($this->intakesStraypickupState !== null) $parameterArray['values'][] = ["intakesStraypickupState"=>$this->intakesStraypickupState];
        if ($this->intakesStraypickupPostalcode !== null) $parameterArray['values'][] = ["intakesStraypickupPostalcode"=>$this->intakesStraypickupPostalcode];
        if ($this->intakesStraypickupFinderID !== null) $parameterArray['values'][] = ["intakesStraypickupFinderID"=>$this->intakesStraypickupFinderID];
        if ($this->intakesStraypickupStaffID !== null) $parameterArray['values'][] = ["intakesStraypickupStaffID"=>$this->intakesStraypickupStaffID];
    }
}