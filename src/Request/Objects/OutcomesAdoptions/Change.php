<?php
/**
 * OutcomesAdoptions Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesAdoptions';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'change';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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