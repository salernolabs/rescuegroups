<?php
/**
 * IntakesStrayDropoffs Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Intake
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesStraydropoffAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesStraydropoffAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesStraydropoffDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesStraydropoffNotes = null;

    /**
     * Found Location
     * @var string
     */
    private $intakesStraydropoffFoundLocation = null;

    /**
     * Found Street address
     * @var string
     */
    private $intakesStraydropoffFoundAddress = null;

    /**
     * Found City
     * @var string
     */
    private $intakesStraydropoffFoundCity = null;

    /**
     * Found State/Province
     * @var string
     */
    private $intakesStraydropoffFoundState = null;

    /**
     * Found Postal Code
     * @var string
     */
    private $intakesStraydropoffFoundPostalcode = null;

    /**
     * Dropped off by
     * @var integer
     */
    private $intakesStraydropoffFinderID = null;


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
        return 'intakesStraydropoffs';
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
     * Set Intake
     *
     * @param integer $intakeID
     * @return $this
     */
    public function setIntakeID($intakeID)
    {
        $this->intakeID = $intakeID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesStraydropoffAnimalID
     * @return $this
     */
    public function setIntakesStraydropoffAnimalID($intakesStraydropoffAnimalID)
    {
        $this->intakesStraydropoffAnimalID = $intakesStraydropoffAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesStraydropoffAnimalConditionID
     * @return $this
     */
    public function setIntakesStraydropoffAnimalConditionID($intakesStraydropoffAnimalConditionID)
    {
        $this->intakesStraydropoffAnimalConditionID = $intakesStraydropoffAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesStraydropoffDate
     * @return $this
     */
    public function setIntakesStraydropoffDate($intakesStraydropoffDate)
    {
        $this->intakesStraydropoffDate = $intakesStraydropoffDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesStraydropoffNotes
     * @return $this
     */
    public function setIntakesStraydropoffNotes($intakesStraydropoffNotes)
    {
        $this->intakesStraydropoffNotes = $intakesStraydropoffNotes;

        return $this;
    }

    /**
     * Set Found Location
     *
     * @param string $intakesStraydropoffFoundLocation
     * @return $this
     */
    public function setIntakesStraydropoffFoundLocation($intakesStraydropoffFoundLocation)
    {
        $this->intakesStraydropoffFoundLocation = $intakesStraydropoffFoundLocation;

        return $this;
    }

    /**
     * Set Found Street address
     *
     * @param string $intakesStraydropoffFoundAddress
     * @return $this
     */
    public function setIntakesStraydropoffFoundAddress($intakesStraydropoffFoundAddress)
    {
        $this->intakesStraydropoffFoundAddress = $intakesStraydropoffFoundAddress;

        return $this;
    }

    /**
     * Set Found City
     *
     * @param string $intakesStraydropoffFoundCity
     * @return $this
     */
    public function setIntakesStraydropoffFoundCity($intakesStraydropoffFoundCity)
    {
        $this->intakesStraydropoffFoundCity = $intakesStraydropoffFoundCity;

        return $this;
    }

    /**
     * Set Found State/Province
     *
     * @param string $intakesStraydropoffFoundState
     * @return $this
     */
    public function setIntakesStraydropoffFoundState($intakesStraydropoffFoundState)
    {
        $this->intakesStraydropoffFoundState = $intakesStraydropoffFoundState;

        return $this;
    }

    /**
     * Set Found Postal Code
     *
     * @param string $intakesStraydropoffFoundPostalcode
     * @return $this
     */
    public function setIntakesStraydropoffFoundPostalcode($intakesStraydropoffFoundPostalcode)
    {
        $this->intakesStraydropoffFoundPostalcode = $intakesStraydropoffFoundPostalcode;

        return $this;
    }

    /**
     * Set Dropped off by
     *
     * @param integer $intakesStraydropoffFinderID
     * @return $this
     */
    public function setIntakesStraydropoffFinderID($intakesStraydropoffFinderID)
    {
        $this->intakesStraydropoffFinderID = $intakesStraydropoffFinderID;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakeID !== null) $parameterArray['intakeID'] = $this->intakeID;
        if ($this->intakesStraydropoffAnimalID !== null) $parameterArray['intakesStraydropoffAnimalID'] = $this->intakesStraydropoffAnimalID;
        if ($this->intakesStraydropoffAnimalConditionID !== null) $parameterArray['intakesStraydropoffAnimalConditionID'] = $this->intakesStraydropoffAnimalConditionID;
        if ($this->intakesStraydropoffDate !== null) $parameterArray['intakesStraydropoffDate'] = $this->intakesStraydropoffDate;
        if ($this->intakesStraydropoffNotes !== null) $parameterArray['intakesStraydropoffNotes'] = $this->intakesStraydropoffNotes;
        if ($this->intakesStraydropoffFoundLocation !== null) $parameterArray['intakesStraydropoffFoundLocation'] = $this->intakesStraydropoffFoundLocation;
        if ($this->intakesStraydropoffFoundAddress !== null) $parameterArray['intakesStraydropoffFoundAddress'] = $this->intakesStraydropoffFoundAddress;
        if ($this->intakesStraydropoffFoundCity !== null) $parameterArray['intakesStraydropoffFoundCity'] = $this->intakesStraydropoffFoundCity;
        if ($this->intakesStraydropoffFoundState !== null) $parameterArray['intakesStraydropoffFoundState'] = $this->intakesStraydropoffFoundState;
        if ($this->intakesStraydropoffFoundPostalcode !== null) $parameterArray['intakesStraydropoffFoundPostalcode'] = $this->intakesStraydropoffFoundPostalcode;
        if ($this->intakesStraydropoffFinderID !== null) $parameterArray['intakesStraydropoffFinderID'] = $this->intakesStraydropoffFinderID;

    }
}