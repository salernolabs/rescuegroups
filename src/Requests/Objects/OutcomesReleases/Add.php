<?php
/**
 * OutcomesReleases Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\OutcomesReleases;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Outcome Release Intake
     * @var integer
     */
    private $outcomesReleaseIntakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesReleaseAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesReleaseDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesReleaseNotes = null;

    /**
     * Location
     * @var string
     */
    private $outcomesReleaseLocation = null;

    /**
     * Street address
     * @var string
     */
    private $outcomesReleaseAddress = null;

    /**
     * City
     * @var string
     */
    private $outcomesReleaseCity = null;

    /**
     * State/Province
     * @var province
     */
    private $outcomesReleaseState = null;

    /**
     * Postal Code
     * @var string
     */
    private $outcomesReleasePostalcode = null;

    /**
     * Released By
     * @var integer
     */
    private $outcomesReleaseByID = null;


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
        return 'outcomesReleases';
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
     * Set Outcome Release Intake
     *
     * @param integer $outcomesReleaseIntakeID
     * @return $this
     */
    public function setOutcomesReleaseIntakeID($outcomesReleaseIntakeID)
    {
        $this->outcomesReleaseIntakeID = $outcomesReleaseIntakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesReleaseAnimalConditionID
     * @return $this
     */
    public function setOutcomesReleaseAnimalConditionID($outcomesReleaseAnimalConditionID)
    {
        $this->outcomesReleaseAnimalConditionID = $outcomesReleaseAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesReleaseDate
     * @return $this
     */
    public function setOutcomesReleaseDate($outcomesReleaseDate)
    {
        $this->outcomesReleaseDate = $outcomesReleaseDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesReleaseNotes
     * @return $this
     */
    public function setOutcomesReleaseNotes($outcomesReleaseNotes)
    {
        $this->outcomesReleaseNotes = $outcomesReleaseNotes;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $outcomesReleaseLocation
     * @return $this
     */
    public function setOutcomesReleaseLocation($outcomesReleaseLocation)
    {
        $this->outcomesReleaseLocation = $outcomesReleaseLocation;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $outcomesReleaseAddress
     * @return $this
     */
    public function setOutcomesReleaseAddress($outcomesReleaseAddress)
    {
        $this->outcomesReleaseAddress = $outcomesReleaseAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $outcomesReleaseCity
     * @return $this
     */
    public function setOutcomesReleaseCity($outcomesReleaseCity)
    {
        $this->outcomesReleaseCity = $outcomesReleaseCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param province $outcomesReleaseState
     * @return $this
     */
    public function setOutcomesReleaseState($outcomesReleaseState)
    {
        $this->outcomesReleaseState = $outcomesReleaseState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $outcomesReleasePostalcode
     * @return $this
     */
    public function setOutcomesReleasePostalcode($outcomesReleasePostalcode)
    {
        $this->outcomesReleasePostalcode = $outcomesReleasePostalcode;

        return $this;
    }

    /**
     * Set Released By
     *
     * @param integer $outcomesReleaseByID
     * @return $this
     */
    public function setOutcomesReleaseByID($outcomesReleaseByID)
    {
        $this->outcomesReleaseByID = $outcomesReleaseByID;

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
        if ($this->outcomesReleaseIntakeID !== null) $parameterArray['outcomesReleaseIntakeID'] = $this->outcomesReleaseIntakeID;
        if ($this->outcomesReleaseAnimalConditionID !== null) $parameterArray['outcomesReleaseAnimalConditionID'] = $this->outcomesReleaseAnimalConditionID;
        if ($this->outcomesReleaseDate !== null) $parameterArray['outcomesReleaseDate'] = $this->outcomesReleaseDate;
        if ($this->outcomesReleaseNotes !== null) $parameterArray['outcomesReleaseNotes'] = $this->outcomesReleaseNotes;
        if ($this->outcomesReleaseLocation !== null) $parameterArray['outcomesReleaseLocation'] = $this->outcomesReleaseLocation;
        if ($this->outcomesReleaseAddress !== null) $parameterArray['outcomesReleaseAddress'] = $this->outcomesReleaseAddress;
        if ($this->outcomesReleaseCity !== null) $parameterArray['outcomesReleaseCity'] = $this->outcomesReleaseCity;
        if ($this->outcomesReleaseState !== null) $parameterArray['outcomesReleaseState'] = $this->outcomesReleaseState;
        if ($this->outcomesReleasePostalcode !== null) $parameterArray['outcomesReleasePostalcode'] = $this->outcomesReleasePostalcode;
        if ($this->outcomesReleaseByID !== null) $parameterArray['outcomesReleaseByID'] = $this->outcomesReleaseByID;

    }
}