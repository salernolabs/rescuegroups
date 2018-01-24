<?php
/**
 * OutcomesTransfers Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesTransfers;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesTransfers';

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
     * Received
     *
     * @var integer
     */
    private $receiveId = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    private $coalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    private $reasonId = null;


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
     * Set Received
     *
     * @param integer $value
     * @return $this
     */
    public function setReceiveId($value)
    {
        $this->receiveId = $value;

        return $this;
    }

    /**
     * Set Coalition Member
     *
     * @param string $value
     * @return $this
     */
    public function setCoalitionMember($value)
    {
        $this->coalitionMember = $value;

        return $this;
    }

    /**
     * Set Transfer Reason
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
        if ($this->outcomeId !== null) $value["outcomeID"] = $this->outcomeId;
        if ($this->animalConditionId !== null) $value["outcomesTransferAnimalConditionID"] = $this->animalConditionId;
        if ($this->date !== null) $value["outcomesTransferDate"] = $this->date;
        if ($this->notes !== null) $value["outcomesTransferNotes"] = $this->notes;
        if ($this->receiveId !== null) $value["outcomesTransferReceiveID"] = $this->receiveId;
        if ($this->coalitionMember !== null) $value["outcomesTransferCoalitionMember"] = $this->coalitionMember;
        if ($this->reasonId !== null) $value["outcomesTransferReasonID"] = $this->reasonId;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}