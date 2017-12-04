<?php
/**
 * OutcomesDeceased Change Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\OutcomesDeceased;

class Change implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Outcome
     * @var integer
     */
    private $outcomeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesDeceasedAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesDeceasedDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesDeceasedNotes = null;

    /**
     * Reason
     * @var string
     */
    private $outcomesDeceasedReason = null;


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
        return 'change';
    }

    /**
     * Set Outcome
     *
     * @param integer $outcomeID
     * @return $this
     */
    public function setOutcomeID($outcomeID)
    {
        $this->outcomeID = $outcomeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesDeceasedAnimalConditionID
     * @return $this
     */
    public function setOutcomesDeceasedAnimalConditionID($outcomesDeceasedAnimalConditionID)
    {
        $this->outcomesDeceasedAnimalConditionID = $outcomesDeceasedAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesDeceasedDate
     * @return $this
     */
    public function setOutcomesDeceasedDate($outcomesDeceasedDate)
    {
        $this->outcomesDeceasedDate = $outcomesDeceasedDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesDeceasedNotes
     * @return $this
     */
    public function setOutcomesDeceasedNotes($outcomesDeceasedNotes)
    {
        $this->outcomesDeceasedNotes = $outcomesDeceasedNotes;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param string $outcomesDeceasedReason
     * @return $this
     */
    public function setOutcomesDeceasedReason($outcomesDeceasedReason)
    {
        $this->outcomesDeceasedReason = $outcomesDeceasedReason;

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
        if ($this->outcomeID !== null) $parameterArray['outcomeID'] = $this->outcomeID;
        if ($this->outcomesDeceasedAnimalConditionID !== null) $parameterArray['outcomesDeceasedAnimalConditionID'] = $this->outcomesDeceasedAnimalConditionID;
        if ($this->outcomesDeceasedDate !== null) $parameterArray['outcomesDeceasedDate'] = $this->outcomesDeceasedDate;
        if ($this->outcomesDeceasedNotes !== null) $parameterArray['outcomesDeceasedNotes'] = $this->outcomesDeceasedNotes;
        if ($this->outcomesDeceasedReason !== null) $parameterArray['outcomesDeceasedReason'] = $this->outcomesDeceasedReason;

    }
}