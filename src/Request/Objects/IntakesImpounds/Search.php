<?php
/**
 * IntakesImpounds Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Impound
     * @var integer
     */
    private $intakesImpoundID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesImpoundAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesImpoundAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesImpoundDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesImpoundNotes = null;

    /**
     * Impound Location
     * @var string
     */
    private $intakesImpoundLocation = null;

    /**
     * Impound Street address
     * @var string
     */
    private $intakesImpoundAddress = null;

    /**
     * Impound City
     * @var string
     */
    private $intakesImpoundCity = null;

    /**
     * Impound State/Province
     * @var string
     */
    private $intakesImpoundState = null;

    /**
     * Impound Postal Code
     * @var string
     */
    private $intakesImpoundPostalcode = null;

    /**
     * Impound From
     * @var integer
     */
    private $intakesImpoundFromID = null;

    /**
     * Impound Performed By
     * @var integer
     */
    private $intakesImpoundStaffID = null;

    /**
     * Reason
     * @var integer
     */
    private $intakesImpoundReasonID = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Animal Condition
     * @var string
     */
    private $animalConditionName = null;

    /**
     * Impound From
     * @var string
     */
    private $impoundFromName = null;

    /**
     * Impound Performed by
     * @var string
     */
    private $impoundStaffName = null;

    /**
     * Impound Reason
     * @var string
     */
    private $impoundReason = null;


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
        return 'intakesImpounds';
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
     * Set Impound
     *
     * @param integer $intakesImpoundID
     * @return $this
     */
    public function setIntakesImpoundID($intakesImpoundID)
    {
        $this->intakesImpoundID = $intakesImpoundID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesImpoundAnimalID
     * @return $this
     */
    public function setIntakesImpoundAnimalID($intakesImpoundAnimalID)
    {
        $this->intakesImpoundAnimalID = $intakesImpoundAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesImpoundAnimalConditionID
     * @return $this
     */
    public function setIntakesImpoundAnimalConditionID($intakesImpoundAnimalConditionID)
    {
        $this->intakesImpoundAnimalConditionID = $intakesImpoundAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesImpoundDate
     * @return $this
     */
    public function setIntakesImpoundDate($intakesImpoundDate)
    {
        $this->intakesImpoundDate = $intakesImpoundDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesImpoundNotes
     * @return $this
     */
    public function setIntakesImpoundNotes($intakesImpoundNotes)
    {
        $this->intakesImpoundNotes = $intakesImpoundNotes;

        return $this;
    }

    /**
     * Set Impound Location
     *
     * @param string $intakesImpoundLocation
     * @return $this
     */
    public function setIntakesImpoundLocation($intakesImpoundLocation)
    {
        $this->intakesImpoundLocation = $intakesImpoundLocation;

        return $this;
    }

    /**
     * Set Impound Street address
     *
     * @param string $intakesImpoundAddress
     * @return $this
     */
    public function setIntakesImpoundAddress($intakesImpoundAddress)
    {
        $this->intakesImpoundAddress = $intakesImpoundAddress;

        return $this;
    }

    /**
     * Set Impound City
     *
     * @param string $intakesImpoundCity
     * @return $this
     */
    public function setIntakesImpoundCity($intakesImpoundCity)
    {
        $this->intakesImpoundCity = $intakesImpoundCity;

        return $this;
    }

    /**
     * Set Impound State/Province
     *
     * @param string $intakesImpoundState
     * @return $this
     */
    public function setIntakesImpoundState($intakesImpoundState)
    {
        $this->intakesImpoundState = $intakesImpoundState;

        return $this;
    }

    /**
     * Set Impound Postal Code
     *
     * @param string $intakesImpoundPostalcode
     * @return $this
     */
    public function setIntakesImpoundPostalcode($intakesImpoundPostalcode)
    {
        $this->intakesImpoundPostalcode = $intakesImpoundPostalcode;

        return $this;
    }

    /**
     * Set Impound From
     *
     * @param integer $intakesImpoundFromID
     * @return $this
     */
    public function setIntakesImpoundFromID($intakesImpoundFromID)
    {
        $this->intakesImpoundFromID = $intakesImpoundFromID;

        return $this;
    }

    /**
     * Set Impound Performed By
     *
     * @param integer $intakesImpoundStaffID
     * @return $this
     */
    public function setIntakesImpoundStaffID($intakesImpoundStaffID)
    {
        $this->intakesImpoundStaffID = $intakesImpoundStaffID;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param integer $intakesImpoundReasonID
     * @return $this
     */
    public function setIntakesImpoundReasonID($intakesImpoundReasonID)
    {
        $this->intakesImpoundReasonID = $intakesImpoundReasonID;

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
     * Set Animal Condition
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
     * Set Impound From
     *
     * @param string $impoundFromName
     * @return $this
     */
    public function setImpoundFromName($impoundFromName)
    {
        $this->impoundFromName = $impoundFromName;

        return $this;
    }

    /**
     * Set Impound Performed by
     *
     * @param string $impoundStaffName
     * @return $this
     */
    public function setImpoundStaffName($impoundStaffName)
    {
        $this->impoundStaffName = $impoundStaffName;

        return $this;
    }

    /**
     * Set Impound Reason
     *
     * @param string $impoundReason
     * @return $this
     */
    public function setImpoundReason($impoundReason)
    {
        $this->impoundReason = $impoundReason;

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
        if ($this->intakesImpoundID !== null) $parameterArray['intakesImpoundID'] = $this->intakesImpoundID;
        if ($this->intakesImpoundAnimalID !== null) $parameterArray['intakesImpoundAnimalID'] = $this->intakesImpoundAnimalID;
        if ($this->intakesImpoundAnimalConditionID !== null) $parameterArray['intakesImpoundAnimalConditionID'] = $this->intakesImpoundAnimalConditionID;
        if ($this->intakesImpoundDate !== null) $parameterArray['intakesImpoundDate'] = $this->intakesImpoundDate;
        if ($this->intakesImpoundNotes !== null) $parameterArray['intakesImpoundNotes'] = $this->intakesImpoundNotes;
        if ($this->intakesImpoundLocation !== null) $parameterArray['intakesImpoundLocation'] = $this->intakesImpoundLocation;
        if ($this->intakesImpoundAddress !== null) $parameterArray['intakesImpoundAddress'] = $this->intakesImpoundAddress;
        if ($this->intakesImpoundCity !== null) $parameterArray['intakesImpoundCity'] = $this->intakesImpoundCity;
        if ($this->intakesImpoundState !== null) $parameterArray['intakesImpoundState'] = $this->intakesImpoundState;
        if ($this->intakesImpoundPostalcode !== null) $parameterArray['intakesImpoundPostalcode'] = $this->intakesImpoundPostalcode;
        if ($this->intakesImpoundFromID !== null) $parameterArray['intakesImpoundFromID'] = $this->intakesImpoundFromID;
        if ($this->intakesImpoundStaffID !== null) $parameterArray['intakesImpoundStaffID'] = $this->intakesImpoundStaffID;
        if ($this->intakesImpoundReasonID !== null) $parameterArray['intakesImpoundReasonID'] = $this->intakesImpoundReasonID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->impoundFromName !== null) $parameterArray['impoundFromName'] = $this->impoundFromName;
        if ($this->impoundStaffName !== null) $parameterArray['impoundStaffName'] = $this->impoundStaffName;
        if ($this->impoundReason !== null) $parameterArray['impoundReason'] = $this->impoundReason;

        $this->addSearchParameters($parameterArray);

    }
}