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
    private $outcomeId = null;

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
     * Adoption
     *
     * @var integer
     */
    private $adoptionId = null;


    /**
     * Set Outcome
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomeId($value)
    {
        $this->outcomeId = $value;

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
     * Set Adoption
     *
     * @param integer $value
     * @return $this
     */
    public function setAdoptionId($value)
    {
        $this->adoptionId = $value;

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

        if ($this->outcomeId !== null) $parameterArray['values'][] = ["outcomeID"=>$this->outcomeId];
        if ($this->animalConditionId !== null) $parameterArray['values'][] = ["outcomesAdoptionAnimalConditionID"=>$this->animalConditionId];
        if ($this->date !== null) $parameterArray['values'][] = ["outcomesAdoptionDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["outcomesAdoptionNotes"=>$this->notes];
        if ($this->adoptionId !== null) $parameterArray['values'][] = ["outcomesAdoptionAdoptionID"=>$this->adoptionId];
    }
}