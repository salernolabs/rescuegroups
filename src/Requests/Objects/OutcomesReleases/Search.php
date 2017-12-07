<?php
/**
 * OutcomesReleases Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Requests\Objects\OutcomesReleases;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $outcomesReleaseID = null;

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
     * Animal
     * @var integer
     */
    private $animalID = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Condition
     * @var string
     */
    private $animalConditionName = null;

    /**
     * Released By
     * @var string
     */
    private $releaseByName = null;


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
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $outcomesReleaseID
     * @return $this
     */
    public function setOutcomesReleaseID($outcomesReleaseID)
    {
        $this->outcomesReleaseID = $outcomesReleaseID;

        return $this;
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
     * Set Animal
     *
     * @param integer $animalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $animalConditionName
     * @return $this
     */
    public function setAnimalConditionName($animalConditionName)
    {
        $this->animalConditionName = $animalConditionName;

        return $this;
    }

    /**
     * Set Released By
     *
     * @param string $releaseByName
     * @return $this
     */
    public function setReleaseByName($releaseByName)
    {
        $this->releaseByName = $releaseByName;

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
        if ($this->outcomesReleaseID !== null) $parameterArray['outcomesReleaseID'] = $this->outcomesReleaseID;
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
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->releaseByName !== null) $parameterArray['releaseByName'] = $this->releaseByName;

        $this->addSearchParameters($parameterArray);

    }
}