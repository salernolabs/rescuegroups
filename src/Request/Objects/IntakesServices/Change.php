<?php
/**
 * IntakesServices Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServices;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesServices';

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
     * Service
     *
     * @var integer
     */
    private $servicetypeId = null;


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
     * Set Service
     *
     * @param integer $value
     * @return $this
     */
    public function setServicetypeId($value)
    {
        $this->servicetypeId = $value;

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
        if ($this->animalId !== null) $value["intakesServiceAnimalID"] = $this->animalId;
        if ($this->animalConditionId !== null) $value["intakesServiceAnimalConditionID"] = $this->animalConditionId;
        if ($this->date !== null) $value["intakesServiceDate"] = $this->date;
        if ($this->notes !== null) $value["intakesServiceNotes"] = $this->notes;
        if ($this->ownerId !== null) $value["intakesServiceOwnerID"] = $this->ownerId;
        if ($this->servicetypeId !== null) $value["intakesServiceServicetypeID"] = $this->servicetypeId;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}