<?php
/**
 * OutcomesEuthanasias Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Requests\Objects\OutcomesEuthanasias;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Outcome Euthanasia Intake
     * @var integer
     */
    private $outcomesEuthanasiaIntakeID = null;

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
        return 'add';
    }

    /**
     * Set Outcome Euthanasia Intake
     *
     * @param integer $outcomesEuthanasiaIntakeID
     * @return $this
     */
    public function setOutcomesEuthanasiaIntakeID($outcomesEuthanasiaIntakeID)
    {
        $this->outcomesEuthanasiaIntakeID = $outcomesEuthanasiaIntakeID;

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
        if ($this->outcomesEuthanasiaIntakeID !== null) $parameterArray['outcomesEuthanasiaIntakeID'] = $this->outcomesEuthanasiaIntakeID;
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $parameterArray['outcomesEuthanasiaAnimalConditionID'] = $this->outcomesEuthanasiaAnimalConditionID;
        if ($this->outcomesEuthanasiaDate !== null) $parameterArray['outcomesEuthanasiaDate'] = $this->outcomesEuthanasiaDate;
        if ($this->outcomesEuthanasiaNotes !== null) $parameterArray['outcomesEuthanasiaNotes'] = $this->outcomesEuthanasiaNotes;
        if ($this->outcomesEuthanasiaReasonID !== null) $parameterArray['outcomesEuthanasiaReasonID'] = $this->outcomesEuthanasiaReasonID;

    }
}