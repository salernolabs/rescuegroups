<?php
/**
 * IntakesTransfers Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesTransfers;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
    private $intakesTransferAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesTransferAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesTransferDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesTransferNotes = null;

    /**
     * Transferred From
     *
     * @var integer
     */
    private $intakesTransferFromID = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    private $intakesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    private $intakesTransferReasonID = null;


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
    public function setIntakesTransferAnimalID($value)
    {
        $this->intakesTransferAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesTransferAnimalConditionID($value)
    {
        $this->intakesTransferAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesTransferDate($value)
    {
        $this->intakesTransferDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesTransferNotes($value)
    {
        $this->intakesTransferNotes = $value;

        return $this;
    }

    /**
     * Set Transferred From
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesTransferFromID($value)
    {
        $this->intakesTransferFromID = $value;

        return $this;
    }

    /**
     * Set Coalition Member
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesTransferCoalitionMember($value)
    {
        $this->intakesTransferCoalitionMember = $value;

        return $this;
    }

    /**
     * Set Transfer Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesTransferReasonID($value)
    {
        $this->intakesTransferReasonID = $value;

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
        return 'intakesTransfers';
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

        if ($this->intakeID !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeID];
        if ($this->intakesTransferAnimalID !== null) $parameterArray['values'][] = ["intakesTransferAnimalID"=>$this->intakesTransferAnimalID];
        if ($this->intakesTransferAnimalConditionID !== null) $parameterArray['values'][] = ["intakesTransferAnimalConditionID"=>$this->intakesTransferAnimalConditionID];
        if ($this->intakesTransferDate !== null) $parameterArray['values'][] = ["intakesTransferDate"=>$this->intakesTransferDate];
        if ($this->intakesTransferNotes !== null) $parameterArray['values'][] = ["intakesTransferNotes"=>$this->intakesTransferNotes];
        if ($this->intakesTransferFromID !== null) $parameterArray['values'][] = ["intakesTransferFromID"=>$this->intakesTransferFromID];
        if ($this->intakesTransferCoalitionMember !== null) $parameterArray['values'][] = ["intakesTransferCoalitionMember"=>$this->intakesTransferCoalitionMember];
        if ($this->intakesTransferReasonID !== null) $parameterArray['values'][] = ["intakesTransferReasonID"=>$this->intakesTransferReasonID];
    }
}