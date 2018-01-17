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
    private $intakeID = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $intakesServiceAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesServiceAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesServiceDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesServiceNotes = null;

    /**
     * Owner
     *
     * @var integer
     */
    private $intakesServiceOwnerID = null;

    /**
     * Service
     *
     * @var integer
     */
    private $intakesServiceServicetypeID = null;


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
    public function setIntakesServiceAnimalID($value)
    {
        $this->intakesServiceAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesServiceAnimalConditionID($value)
    {
        $this->intakesServiceAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesServiceDate($value)
    {
        $this->intakesServiceDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesServiceNotes($value)
    {
        $this->intakesServiceNotes = $value;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesServiceOwnerID($value)
    {
        $this->intakesServiceOwnerID = $value;

        return $this;
    }

    /**
     * Set Service
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesServiceServicetypeID($value)
    {
        $this->intakesServiceServicetypeID = $value;

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

        if ($this->intakeID !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeID];
        if ($this->intakesServiceAnimalID !== null) $parameterArray['values'][] = ["intakesServiceAnimalID"=>$this->intakesServiceAnimalID];
        if ($this->intakesServiceAnimalConditionID !== null) $parameterArray['values'][] = ["intakesServiceAnimalConditionID"=>$this->intakesServiceAnimalConditionID];
        if ($this->intakesServiceDate !== null) $parameterArray['values'][] = ["intakesServiceDate"=>$this->intakesServiceDate];
        if ($this->intakesServiceNotes !== null) $parameterArray['values'][] = ["intakesServiceNotes"=>$this->intakesServiceNotes];
        if ($this->intakesServiceOwnerID !== null) $parameterArray['values'][] = ["intakesServiceOwnerID"=>$this->intakesServiceOwnerID];
        if ($this->intakesServiceServicetypeID !== null) $parameterArray['values'][] = ["intakesServiceServicetypeID"=>$this->intakesServiceServicetypeID];
    }
}