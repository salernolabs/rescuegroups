<?php
/**
 * OutcomesTransfers Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesTransfers;

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
    private $outcomesTransferAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $outcomesTransferDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $outcomesTransferNotes = null;

    /**
     * Received
     *
     * @var integer
     */
    private $outcomesTransferReceiveID = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    private $outcomesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    private $outcomesTransferReasonID = null;


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
    public function setOutcomesTransferAnimalConditionID($value)
    {
        $this->outcomesTransferAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setOutcomesTransferDate($value)
    {
        $this->outcomesTransferDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesTransferNotes($value)
    {
        $this->outcomesTransferNotes = $value;

        return $this;
    }

    /**
     * Set Received
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesTransferReceiveID($value)
    {
        $this->outcomesTransferReceiveID = $value;

        return $this;
    }

    /**
     * Set Coalition Member
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesTransferCoalitionMember($value)
    {
        $this->outcomesTransferCoalitionMember = $value;

        return $this;
    }

    /**
     * Set Transfer Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesTransferReasonID($value)
    {
        $this->outcomesTransferReasonID = $value;

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
        return 'outcomesTransfers';
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
        if ($this->outcomesTransferAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesTransferAnimalConditionID"=>$this->outcomesTransferAnimalConditionID];
        if ($this->outcomesTransferDate !== null) $parameterArray['values'][] = ["outcomesTransferDate"=>$this->outcomesTransferDate];
        if ($this->outcomesTransferNotes !== null) $parameterArray['values'][] = ["outcomesTransferNotes"=>$this->outcomesTransferNotes];
        if ($this->outcomesTransferReceiveID !== null) $parameterArray['values'][] = ["outcomesTransferReceiveID"=>$this->outcomesTransferReceiveID];
        if ($this->outcomesTransferCoalitionMember !== null) $parameterArray['values'][] = ["outcomesTransferCoalitionMember"=>$this->outcomesTransferCoalitionMember];
        if ($this->outcomesTransferReasonID !== null) $parameterArray['values'][] = ["outcomesTransferReasonID"=>$this->outcomesTransferReasonID];
    }
}