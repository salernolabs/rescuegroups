<?php
/**
 * IntakesOwnerRequestEdeuthanasias Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerRequestEdeuthanasias;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Owner requestedeuthanasia
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesOwnerrequestedeuthanasiaDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesOwnerrequestedeuthanasiaNotes = null;

    /**
     * Owner
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaOwnerID = null;

    /**
     * Euthanasia Reason
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaReasonID = null;


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
        return 'intakesOwnerrequestedeuthanasias';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Set Owner requestedeuthanasia
     *
     * @param integer $intakesOwnerrequestedeuthanasiaID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaID($intakesOwnerrequestedeuthanasiaID)
    {
        $this->intakesOwnerrequestedeuthanasiaID = $intakesOwnerrequestedeuthanasiaID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesOwnerrequestedeuthanasiaAnimalID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalID($intakesOwnerrequestedeuthanasiaAnimalID)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalID = $intakesOwnerrequestedeuthanasiaAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesOwnerrequestedeuthanasiaAnimalConditionID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalConditionID($intakesOwnerrequestedeuthanasiaAnimalConditionID)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalConditionID = $intakesOwnerrequestedeuthanasiaAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesOwnerrequestedeuthanasiaDate
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaDate($intakesOwnerrequestedeuthanasiaDate)
    {
        $this->intakesOwnerrequestedeuthanasiaDate = $intakesOwnerrequestedeuthanasiaDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesOwnerrequestedeuthanasiaNotes
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaNotes($intakesOwnerrequestedeuthanasiaNotes)
    {
        $this->intakesOwnerrequestedeuthanasiaNotes = $intakesOwnerrequestedeuthanasiaNotes;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $intakesOwnerrequestedeuthanasiaOwnerID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaOwnerID($intakesOwnerrequestedeuthanasiaOwnerID)
    {
        $this->intakesOwnerrequestedeuthanasiaOwnerID = $intakesOwnerrequestedeuthanasiaOwnerID;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $intakesOwnerrequestedeuthanasiaReasonID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaReasonID($intakesOwnerrequestedeuthanasiaReasonID)
    {
        $this->intakesOwnerrequestedeuthanasiaReasonID = $intakesOwnerrequestedeuthanasiaReasonID;

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
        if ($this->intakesOwnerrequestedeuthanasiaID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaID'] = $this->intakesOwnerrequestedeuthanasiaID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaAnimalID'] = $this->intakesOwnerrequestedeuthanasiaAnimalID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalConditionID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaAnimalConditionID'] = $this->intakesOwnerrequestedeuthanasiaAnimalConditionID;
        if ($this->intakesOwnerrequestedeuthanasiaDate !== null) $parameterArray['intakesOwnerrequestedeuthanasiaDate'] = $this->intakesOwnerrequestedeuthanasiaDate;
        if ($this->intakesOwnerrequestedeuthanasiaNotes !== null) $parameterArray['intakesOwnerrequestedeuthanasiaNotes'] = $this->intakesOwnerrequestedeuthanasiaNotes;
        if ($this->intakesOwnerrequestedeuthanasiaOwnerID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaOwnerID'] = $this->intakesOwnerrequestedeuthanasiaOwnerID;
        if ($this->intakesOwnerrequestedeuthanasiaReasonID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaReasonID'] = $this->intakesOwnerrequestedeuthanasiaReasonID;

    }
}