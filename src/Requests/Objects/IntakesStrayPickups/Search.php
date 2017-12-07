<?php
/**
 * IntakesStrayPickups Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:41
 */
namespace RescueGroups\Requests\Objects\IntakesStrayPickups;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Stray Pickup
     * @var integer
     */
    private $intakesStraypickupID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesStraypickupAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesStraypickupAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesStraypickupDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesStraypickupNotes = null;

    /**
     * Pickup Location
     * @var string
     */
    private $intakesStraypickupLocation = null;

    /**
     * Pickup Street address
     * @var string
     */
    private $intakesStraypickupAddress = null;

    /**
     * Pickup City
     * @var string
     */
    private $intakesStraypickupCity = null;

    /**
     * Pickup State/Province
     * @var province
     */
    private $intakesStraypickupState = null;

    /**
     * Pickup Postal Code
     * @var string
     */
    private $intakesStraypickupPostalcode = null;

    /**
     * Found By
     * @var integer
     */
    private $intakesStraypickupFinderID = null;

    /**
     * Pickup By
     * @var integer
     */
    private $intakesStraypickupStaffID = null;

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
     * Found by
     * @var string
     */
    private $finderName = null;

    /**
     * Pickup by
     * @var string
     */
    private $pickupstaffName = null;


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
        return 'intakesStraypickups';
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
     * Set Stray Pickup
     *
     * @param integer $intakesStraypickupID
     * @return $this
     */
    public function setIntakesStraypickupID($intakesStraypickupID)
    {
        $this->intakesStraypickupID = $intakesStraypickupID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesStraypickupAnimalID
     * @return $this
     */
    public function setIntakesStraypickupAnimalID($intakesStraypickupAnimalID)
    {
        $this->intakesStraypickupAnimalID = $intakesStraypickupAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesStraypickupAnimalConditionID
     * @return $this
     */
    public function setIntakesStraypickupAnimalConditionID($intakesStraypickupAnimalConditionID)
    {
        $this->intakesStraypickupAnimalConditionID = $intakesStraypickupAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesStraypickupDate
     * @return $this
     */
    public function setIntakesStraypickupDate($intakesStraypickupDate)
    {
        $this->intakesStraypickupDate = $intakesStraypickupDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesStraypickupNotes
     * @return $this
     */
    public function setIntakesStraypickupNotes($intakesStraypickupNotes)
    {
        $this->intakesStraypickupNotes = $intakesStraypickupNotes;

        return $this;
    }

    /**
     * Set Pickup Location
     *
     * @param string $intakesStraypickupLocation
     * @return $this
     */
    public function setIntakesStraypickupLocation($intakesStraypickupLocation)
    {
        $this->intakesStraypickupLocation = $intakesStraypickupLocation;

        return $this;
    }

    /**
     * Set Pickup Street address
     *
     * @param string $intakesStraypickupAddress
     * @return $this
     */
    public function setIntakesStraypickupAddress($intakesStraypickupAddress)
    {
        $this->intakesStraypickupAddress = $intakesStraypickupAddress;

        return $this;
    }

    /**
     * Set Pickup City
     *
     * @param string $intakesStraypickupCity
     * @return $this
     */
    public function setIntakesStraypickupCity($intakesStraypickupCity)
    {
        $this->intakesStraypickupCity = $intakesStraypickupCity;

        return $this;
    }

    /**
     * Set Pickup State/Province
     *
     * @param province $intakesStraypickupState
     * @return $this
     */
    public function setIntakesStraypickupState($intakesStraypickupState)
    {
        $this->intakesStraypickupState = $intakesStraypickupState;

        return $this;
    }

    /**
     * Set Pickup Postal Code
     *
     * @param string $intakesStraypickupPostalcode
     * @return $this
     */
    public function setIntakesStraypickupPostalcode($intakesStraypickupPostalcode)
    {
        $this->intakesStraypickupPostalcode = $intakesStraypickupPostalcode;

        return $this;
    }

    /**
     * Set Found By
     *
     * @param integer $intakesStraypickupFinderID
     * @return $this
     */
    public function setIntakesStraypickupFinderID($intakesStraypickupFinderID)
    {
        $this->intakesStraypickupFinderID = $intakesStraypickupFinderID;

        return $this;
    }

    /**
     * Set Pickup By
     *
     * @param integer $intakesStraypickupStaffID
     * @return $this
     */
    public function setIntakesStraypickupStaffID($intakesStraypickupStaffID)
    {
        $this->intakesStraypickupStaffID = $intakesStraypickupStaffID;

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
     * Set Found by
     *
     * @param string $finderName
     * @return $this
     */
    public function setFinderName($finderName)
    {
        $this->finderName = $finderName;

        return $this;
    }

    /**
     * Set Pickup by
     *
     * @param string $pickupstaffName
     * @return $this
     */
    public function setPickupstaffName($pickupstaffName)
    {
        $this->pickupstaffName = $pickupstaffName;

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
        if ($this->intakesStraypickupID !== null) $parameterArray['intakesStraypickupID'] = $this->intakesStraypickupID;
        if ($this->intakesStraypickupAnimalID !== null) $parameterArray['intakesStraypickupAnimalID'] = $this->intakesStraypickupAnimalID;
        if ($this->intakesStraypickupAnimalConditionID !== null) $parameterArray['intakesStraypickupAnimalConditionID'] = $this->intakesStraypickupAnimalConditionID;
        if ($this->intakesStraypickupDate !== null) $parameterArray['intakesStraypickupDate'] = $this->intakesStraypickupDate;
        if ($this->intakesStraypickupNotes !== null) $parameterArray['intakesStraypickupNotes'] = $this->intakesStraypickupNotes;
        if ($this->intakesStraypickupLocation !== null) $parameterArray['intakesStraypickupLocation'] = $this->intakesStraypickupLocation;
        if ($this->intakesStraypickupAddress !== null) $parameterArray['intakesStraypickupAddress'] = $this->intakesStraypickupAddress;
        if ($this->intakesStraypickupCity !== null) $parameterArray['intakesStraypickupCity'] = $this->intakesStraypickupCity;
        if ($this->intakesStraypickupState !== null) $parameterArray['intakesStraypickupState'] = $this->intakesStraypickupState;
        if ($this->intakesStraypickupPostalcode !== null) $parameterArray['intakesStraypickupPostalcode'] = $this->intakesStraypickupPostalcode;
        if ($this->intakesStraypickupFinderID !== null) $parameterArray['intakesStraypickupFinderID'] = $this->intakesStraypickupFinderID;
        if ($this->intakesStraypickupStaffID !== null) $parameterArray['intakesStraypickupStaffID'] = $this->intakesStraypickupStaffID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->finderName !== null) $parameterArray['finderName'] = $this->finderName;
        if ($this->pickupstaffName !== null) $parameterArray['pickupstaffName'] = $this->pickupstaffName;

        $this->addSearchParameters($parameterArray);

    }
}