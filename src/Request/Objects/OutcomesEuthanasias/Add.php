<?php
/**
 * OutcomesEuthanasias Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesEuthanasias;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Outcome Euthanasia Intake
     *
     * @var integer
     */
    private $outcomesEuthanasiaIntakeID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $outcomesEuthanasiaAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $outcomesEuthanasiaDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $outcomesEuthanasiaNotes = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    private $outcomesEuthanasiaReasonID = null;


    /**
     * Set Outcome Euthanasia Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesEuthanasiaIntakeID($value)
    {
        $this->outcomesEuthanasiaIntakeID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesEuthanasiaAnimalConditionID($value)
    {
        $this->outcomesEuthanasiaAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setOutcomesEuthanasiaDate($value)
    {
        $this->outcomesEuthanasiaDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesEuthanasiaNotes($value)
    {
        $this->outcomesEuthanasiaNotes = $value;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesEuthanasiaReasonID($value)
    {
        $this->outcomesEuthanasiaReasonID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->outcomesEuthanasiaIntakeID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaIntakeID"=>$this->outcomesEuthanasiaIntakeID];
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaAnimalConditionID"=>$this->outcomesEuthanasiaAnimalConditionID];
        if ($this->outcomesEuthanasiaDate !== null) $parameterArray['values'][] = ["outcomesEuthanasiaDate"=>$this->outcomesEuthanasiaDate];
        if ($this->outcomesEuthanasiaNotes !== null) $parameterArray['values'][] = ["outcomesEuthanasiaNotes"=>$this->outcomesEuthanasiaNotes];
        if ($this->outcomesEuthanasiaReasonID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaReasonID"=>$this->outcomesEuthanasiaReasonID];
    }
}