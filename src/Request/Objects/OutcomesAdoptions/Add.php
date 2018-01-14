<?php
/**
 * OutcomesAdoptions Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Outcome Adoption Intake
     *
     * @var integer
     */
    private $outcomesAdoptionIntakeID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $outcomesAdoptionAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $outcomesAdoptionDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $outcomesAdoptionNotes = null;

    /**
     * Adoption
     *
     * @var integer
     */
    private $outcomesAdoptionAdoptionID = null;


    /**
     * Set Outcome Adoption Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesAdoptionIntakeID($value)
    {
        $this->outcomesAdoptionIntakeID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesAdoptionAnimalConditionID($value)
    {
        $this->outcomesAdoptionAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setOutcomesAdoptionDate($value)
    {
        $this->outcomesAdoptionDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesAdoptionNotes($value)
    {
        $this->outcomesAdoptionNotes = $value;

        return $this;
    }

    /**
     * Set Adoption
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesAdoptionAdoptionID($value)
    {
        $this->outcomesAdoptionAdoptionID = $value;

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
        return 'outcomesAdoptions';
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

        if ($this->outcomesAdoptionIntakeID !== null) $parameterArray['values'][] = ["outcomesAdoptionIntakeID"=>$this->outcomesAdoptionIntakeID];
        if ($this->outcomesAdoptionAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesAdoptionAnimalConditionID"=>$this->outcomesAdoptionAnimalConditionID];
        if ($this->outcomesAdoptionDate !== null) $parameterArray['values'][] = ["outcomesAdoptionDate"=>$this->outcomesAdoptionDate];
        if ($this->outcomesAdoptionNotes !== null) $parameterArray['values'][] = ["outcomesAdoptionNotes"=>$this->outcomesAdoptionNotes];
        if ($this->outcomesAdoptionAdoptionID !== null) $parameterArray['values'][] = ["outcomesAdoptionAdoptionID"=>$this->outcomesAdoptionAdoptionID];
    }
}