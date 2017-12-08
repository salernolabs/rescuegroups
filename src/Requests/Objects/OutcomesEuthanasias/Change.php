<?php
/**
 * OutcomesEuthanasias Change Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\OutcomesEuthanasias;

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
    private $outcomesEuthanasiaAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesEuthanasiaDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesEuthanasiaNotes = null;

    /**
     * Euthanasia Reason
     * @var integer
     */
    private $outcomesEuthanasiaReasonID = null;


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
        return 'outcomesEuthanasias';
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
     * @param integer $outcomesEuthanasiaAnimalConditionID
     * @return $this
     */
    public function setOutcomesEuthanasiaAnimalConditionID($outcomesEuthanasiaAnimalConditionID)
    {
        $this->outcomesEuthanasiaAnimalConditionID = $outcomesEuthanasiaAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesEuthanasiaDate
     * @return $this
     */
    public function setOutcomesEuthanasiaDate($outcomesEuthanasiaDate)
    {
        $this->outcomesEuthanasiaDate = $outcomesEuthanasiaDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesEuthanasiaNotes
     * @return $this
     */
    public function setOutcomesEuthanasiaNotes($outcomesEuthanasiaNotes)
    {
        $this->outcomesEuthanasiaNotes = $outcomesEuthanasiaNotes;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $outcomesEuthanasiaReasonID
     * @return $this
     */
    public function setOutcomesEuthanasiaReasonID($outcomesEuthanasiaReasonID)
    {
        $this->outcomesEuthanasiaReasonID = $outcomesEuthanasiaReasonID;

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
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $parameterArray['outcomesEuthanasiaAnimalConditionID'] = $this->outcomesEuthanasiaAnimalConditionID;
        if ($this->outcomesEuthanasiaDate !== null) $parameterArray['outcomesEuthanasiaDate'] = $this->outcomesEuthanasiaDate;
        if ($this->outcomesEuthanasiaNotes !== null) $parameterArray['outcomesEuthanasiaNotes'] = $this->outcomesEuthanasiaNotes;
        if ($this->outcomesEuthanasiaReasonID !== null) $parameterArray['outcomesEuthanasiaReasonID'] = $this->outcomesEuthanasiaReasonID;

    }
}