<?php
/**
 * IntakesOwnerRequestedEuthanasias Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesOwnerrequestedeuthanasias';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'change';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Intake
     *
     * @var integer
     */
    private $intakeId = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $animalId = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $animalConditionId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $date = null;

    /**
     * Notes
     *
     * @var string
     */
    private $notes = null;

    /**
     * Owner
     *
     * @var integer
     */
    private $ownerId = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    private $reasonId = null;


    /**
     * Set Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakeId($value)
    {
        $this->intakeId = $value;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalId($value)
    {
        $this->animalId = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalConditionId($value)
    {
        $this->animalConditionId = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setDate($value)
    {
        $this->date = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setNotes($value)
    {
        $this->notes = $value;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $value
     * @return $this
     */
    public function setOwnerId($value)
    {
        $this->ownerId = $value;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setReasonId($value)
    {
        $this->reasonId = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];
        if ($this->intakeId !== null) $value["intakeID"] = $this->intakeId;
        if ($this->animalId !== null) $value["intakesOwnerrequestedeuthanasiaAnimalID"] = $this->animalId;
        if ($this->animalConditionId !== null) $value["intakesOwnerrequestedeuthanasiaAnimalConditionID"] = $this->animalConditionId;
        if ($this->date !== null) $value["intakesOwnerrequestedeuthanasiaDate"] = $this->date;
        if ($this->notes !== null) $value["intakesOwnerrequestedeuthanasiaNotes"] = $this->notes;
        if ($this->ownerId !== null) $value["intakesOwnerrequestedeuthanasiaOwnerID"] = $this->ownerId;
        if ($this->reasonId !== null) $value["intakesOwnerrequestedeuthanasiaReasonID"] = $this->reasonId;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}