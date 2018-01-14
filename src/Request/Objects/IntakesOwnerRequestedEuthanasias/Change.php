<?php
/**
 * IntakesOwnerRequestedEuthanasias Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Intake
     *
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesOwnerrequestedeuthanasiaDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesOwnerrequestedeuthanasiaNotes = null;

    /**
     * Owner
     *
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaOwnerID = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaReasonID = null;


    /**
     * Set Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakeID($value)
    {
        $this->intakeID = $value;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalID($value)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalConditionID($value)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaDate($value)
    {
        $this->intakesOwnerrequestedeuthanasiaDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaNotes($value)
    {
        $this->intakesOwnerrequestedeuthanasiaNotes = $value;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaOwnerID($value)
    {
        $this->intakesOwnerrequestedeuthanasiaOwnerID = $value;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaReasonID($value)
    {
        $this->intakesOwnerrequestedeuthanasiaReasonID = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'intakesOwnerrequestedeuthanasias';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakeID !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeID];
        if ($this->intakesOwnerrequestedeuthanasiaAnimalID !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaAnimalID"=>$this->intakesOwnerrequestedeuthanasiaAnimalID];
        if ($this->intakesOwnerrequestedeuthanasiaAnimalConditionID !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaAnimalConditionID"=>$this->intakesOwnerrequestedeuthanasiaAnimalConditionID];
        if ($this->intakesOwnerrequestedeuthanasiaDate !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaDate"=>$this->intakesOwnerrequestedeuthanasiaDate];
        if ($this->intakesOwnerrequestedeuthanasiaNotes !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaNotes"=>$this->intakesOwnerrequestedeuthanasiaNotes];
        if ($this->intakesOwnerrequestedeuthanasiaOwnerID !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaOwnerID"=>$this->intakesOwnerrequestedeuthanasiaOwnerID];
        if ($this->intakesOwnerrequestedeuthanasiaReasonID !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaReasonID"=>$this->intakesOwnerrequestedeuthanasiaReasonID];
    }
}