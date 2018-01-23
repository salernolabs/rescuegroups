<?php
/**
 * OutcomesReturnToOwner Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReturnToOwner;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesReturntoowner';

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
     * Return To
     *
     * @var integer
     */
    private $ownerId = null;


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
     * Set Return To
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->outcomeId !== null) $parameterArray['values'][] = ["outcomeID"=>$this->outcomeId];
        if ($this->animalConditionId !== null) $parameterArray['values'][] = ["outcomesReturntoownerAnimalConditionID"=>$this->animalConditionId];
        if ($this->date !== null) $parameterArray['values'][] = ["outcomesReturntoownerDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["outcomesReturntoownerNotes"=>$this->notes];
        if ($this->ownerId !== null) $parameterArray['values'][] = ["outcomesReturntoownerOwnerID"=>$this->ownerId];
    }
}