<?php
/**
 * OutcomesReturnToOwner Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReturnToOwner;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Outcome Returntoowner Intake
     *
     * @var integer
     */
    private $intakeID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $animalConditionID = null;

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
     * Return To
     *
     * @var integer
     */
    private $ownerID = null;


    /**
     * Set Outcome Returntoowner Intake
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
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalConditionID($value)
    {
        $this->animalConditionID = $value;

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
     * Set Return To
     *
     * @param integer $value
     * @return $this
     */
    public function setOwnerID($value)
    {
        $this->ownerID = $value;

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
        return 'outcomesReturntoowner';
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

        if ($this->intakeID !== null) $parameterArray['values'][] = ["outcomesReturntoownerIntakeID"=>$this->intakeID];
        if ($this->animalConditionID !== null) $parameterArray['values'][] = ["outcomesReturntoownerAnimalConditionID"=>$this->animalConditionID];
        if ($this->date !== null) $parameterArray['values'][] = ["outcomesReturntoownerDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["outcomesReturntoownerNotes"=>$this->notes];
        if ($this->ownerID !== null) $parameterArray['values'][] = ["outcomesReturntoownerOwnerID"=>$this->ownerID];
    }
}