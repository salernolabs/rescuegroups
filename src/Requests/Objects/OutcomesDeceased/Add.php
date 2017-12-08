<?php
/**
 * OutcomesDeceased Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\OutcomesDeceased;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
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
        return 'add';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakeID !== null) $parameterArray['outcomesDeceasedIntakeID'] = $this->intakeID;
        if ($this->animalConditionID !== null) $parameterArray['outcomesDeceasedAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $parameterArray['outcomesDeceasedDate'] = $this->date;
        if ($this->notes !== null) $parameterArray['outcomesDeceasedNotes'] = $this->notes;
        if ($this->reason !== null) $parameterArray['outcomesDeceasedReason'] = $this->reason;

    }
}