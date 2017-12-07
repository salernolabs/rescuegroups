<?php
/**
 * OutcomesAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:25
 */
namespace RescueGroups\Requests\Objects\OutcomesAdoptions;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $outcomesAdoptionID = null;

    /**
     * Outcome Adoption Intake
     * @var integer
     */
    private $outcomesAdoptionIntakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesAdoptionAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesAdoptionDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesAdoptionNotes = null;

    /**
     * Adoption
     * @var integer
     */
    private $outcomesAdoptionAdoptionID = null;

    /**
     * Animal
     * @var string
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
     * Adopter Contact
     * @var string
     */
    private $adopterContactID = null;

    /**
     * Owner
     * @var string
     */
    private $ownerName = null;


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
        return 'outcomesAdoptions';
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
     * @param integer $outcomesAdoptionID
     * @return $this
     */
    public function setOutcomesAdoptionID($outcomesAdoptionID)
    {
        $this->outcomesAdoptionID = $outcomesAdoptionID;

        return $this;
    }

    /**
     * Set Outcome Adoption Intake
     *
     * @param integer $outcomesAdoptionIntakeID
     * @return $this
     */
    public function setOutcomesAdoptionIntakeID($outcomesAdoptionIntakeID)
    {
        $this->outcomesAdoptionIntakeID = $outcomesAdoptionIntakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesAdoptionAnimalConditionID
     * @return $this
     */
    public function setOutcomesAdoptionAnimalConditionID($outcomesAdoptionAnimalConditionID)
    {
        $this->outcomesAdoptionAnimalConditionID = $outcomesAdoptionAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesAdoptionDate
     * @return $this
     */
    public function setOutcomesAdoptionDate($outcomesAdoptionDate)
    {
        $this->outcomesAdoptionDate = $outcomesAdoptionDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesAdoptionNotes
     * @return $this
     */
    public function setOutcomesAdoptionNotes($outcomesAdoptionNotes)
    {
        $this->outcomesAdoptionNotes = $outcomesAdoptionNotes;

        return $this;
    }

    /**
     * Set Adoption
     *
     * @param integer $outcomesAdoptionAdoptionID
     * @return $this
     */
    public function setOutcomesAdoptionAdoptionID($outcomesAdoptionAdoptionID)
    {
        $this->outcomesAdoptionAdoptionID = $outcomesAdoptionAdoptionID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $animalID
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
     * Set Adopter Contact
     *
     * @param string $adopterContactID
     * @return $this
     */
    public function setAdopterContactID($adopterContactID)
    {
        $this->adopterContactID = $adopterContactID;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param string $ownerName
     * @return $this
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

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
        if ($this->outcomesAdoptionID !== null) $parameterArray['outcomesAdoptionID'] = $this->outcomesAdoptionID;
        if ($this->outcomesAdoptionIntakeID !== null) $parameterArray['outcomesAdoptionIntakeID'] = $this->outcomesAdoptionIntakeID;
        if ($this->outcomesAdoptionAnimalConditionID !== null) $parameterArray['outcomesAdoptionAnimalConditionID'] = $this->outcomesAdoptionAnimalConditionID;
        if ($this->outcomesAdoptionDate !== null) $parameterArray['outcomesAdoptionDate'] = $this->outcomesAdoptionDate;
        if ($this->outcomesAdoptionNotes !== null) $parameterArray['outcomesAdoptionNotes'] = $this->outcomesAdoptionNotes;
        if ($this->outcomesAdoptionAdoptionID !== null) $parameterArray['outcomesAdoptionAdoptionID'] = $this->outcomesAdoptionAdoptionID;
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->adopterContactID !== null) $parameterArray['adopterContactID'] = $this->adopterContactID;
        if ($this->ownerName !== null) $parameterArray['ownerName'] = $this->ownerName;

        $this->addSearchParameters($parameterArray);

    }
}