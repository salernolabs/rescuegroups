<?php
/**
 * OutcomesDeceased Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesDeceased;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $id = null;

    /**
     * Outcome Deceased Intake
     * @var integer
     */
    private $intakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $date = null;

    /**
     * Notes
     * @var string
     */
    private $notes = null;

    /**
     * Reason
     * @var string
     */
    private $reason = null;

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
        return 'outcomesDeceased';
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
     * @param integer $outcomesDeceasedID
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set Outcome Deceased Intake
     *
     * @param integer $outcomesDeceasedIntakeID
     * @return $this
     */
    public function setIntakeID($intakeID)
    {
        $this->intakeID = $intakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesDeceasedAnimalConditionID
     * @return $this
     */
    public function setAnimalConditionID($animalConditionID)
    {
        $this->animalConditionID = $animalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesDeceasedDate
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesDeceasedNotes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param string $outcomesDeceasedReason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->id !== null) $parameterArray['outcomesDeceasedID'] = $this->id;
        if ($this->intakeID !== null) $parameterArray['outcomesDeceasedIntakeID'] = $this->intakeID;
        if ($this->animalConditionID !== null) $parameterArray['outcomesDeceasedAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $parameterArray['outcomesDeceasedDate'] = $this->date;
        if ($this->notes !== null) $parameterArray['outcomesDeceasedNotes'] = $this->notes;
        if ($this->reason !== null) $parameterArray['outcomesDeceasedReason'] = $this->reason;
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;

        $this->addSearchParameters($parameterArray);

    }
}