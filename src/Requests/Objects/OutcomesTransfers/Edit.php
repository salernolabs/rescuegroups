<?php
/**
 * OutcomesTransfers Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\OutcomesTransfers;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $outcomesTransferID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesTransferAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesTransferDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesTransferNotes = null;

    /**
     * Received
     * @var integer
     */
    private $outcomesTransferReceiveID = null;

    /**
     * Coalition Member
     * @var string
     */
    private $outcomesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     * @var integer
     */
    private $outcomesTransferReasonID = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $outcomesTransferID
     * @return $this
     */
    public function setOutcomesTransferID($outcomesTransferID)
    {
        $this->outcomesTransferID = $outcomesTransferID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesTransferAnimalConditionID
     * @return $this
     */
    public function setOutcomesTransferAnimalConditionID($outcomesTransferAnimalConditionID)
    {
        $this->outcomesTransferAnimalConditionID = $outcomesTransferAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesTransferDate
     * @return $this
     */
    public function setOutcomesTransferDate($outcomesTransferDate)
    {
        $this->outcomesTransferDate = $outcomesTransferDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesTransferNotes
     * @return $this
     */
    public function setOutcomesTransferNotes($outcomesTransferNotes)
    {
        $this->outcomesTransferNotes = $outcomesTransferNotes;

        return $this;
    }

    /**
     * Set Received
     *
     * @param integer $outcomesTransferReceiveID
     * @return $this
     */
    public function setOutcomesTransferReceiveID($outcomesTransferReceiveID)
    {
        $this->outcomesTransferReceiveID = $outcomesTransferReceiveID;

        return $this;
    }

    /**
     * Set Coalition Member
     *
     * @param string $outcomesTransferCoalitionMember
     * @return $this
     */
    public function setOutcomesTransferCoalitionMember($outcomesTransferCoalitionMember)
    {
        $this->outcomesTransferCoalitionMember = $outcomesTransferCoalitionMember;

        return $this;
    }

    /**
     * Set Transfer Reason
     *
     * @param integer $outcomesTransferReasonID
     * @return $this
     */
    public function setOutcomesTransferReasonID($outcomesTransferReasonID)
    {
        $this->outcomesTransferReasonID = $outcomesTransferReasonID;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->outcomesTransferID !== null) $parameterArray['outcomesTransferID'] = $this->outcomesTransferID;
        if ($this->outcomesTransferAnimalConditionID !== null) $parameterArray['outcomesTransferAnimalConditionID'] = $this->outcomesTransferAnimalConditionID;
        if ($this->outcomesTransferDate !== null) $parameterArray['outcomesTransferDate'] = $this->outcomesTransferDate;
        if ($this->outcomesTransferNotes !== null) $parameterArray['outcomesTransferNotes'] = $this->outcomesTransferNotes;
        if ($this->outcomesTransferReceiveID !== null) $parameterArray['outcomesTransferReceiveID'] = $this->outcomesTransferReceiveID;
        if ($this->outcomesTransferCoalitionMember !== null) $parameterArray['outcomesTransferCoalitionMember'] = $this->outcomesTransferCoalitionMember;
        if ($this->outcomesTransferReasonID !== null) $parameterArray['outcomesTransferReasonID'] = $this->outcomesTransferReasonID;

    }
}