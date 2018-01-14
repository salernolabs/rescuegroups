<?php
/**
 * OutcomesAdoptions Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Outcome
     *
     * @var integer
     */
    private $outcomeID = null;

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
     * Set Outcome
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomeID($value)
    {
        $this->outcomeID = $value;

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

        if ($this->outcomeID !== null) $parameterArray['values'][] = ["outcomeID"=>$this->outcomeID];
        if ($this->outcomesAdoptionAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesAdoptionAnimalConditionID"=>$this->outcomesAdoptionAnimalConditionID];
        if ($this->outcomesAdoptionDate !== null) $parameterArray['values'][] = ["outcomesAdoptionDate"=>$this->outcomesAdoptionDate];
        if ($this->outcomesAdoptionNotes !== null) $parameterArray['values'][] = ["outcomesAdoptionNotes"=>$this->outcomesAdoptionNotes];
        if ($this->outcomesAdoptionAdoptionID !== null) $parameterArray['values'][] = ["outcomesAdoptionAdoptionID"=>$this->outcomesAdoptionAdoptionID];
    }
}