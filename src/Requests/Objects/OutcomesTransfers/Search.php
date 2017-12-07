<?php
/**
 * OutcomesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Requests\Objects\OutcomesTransfers;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $outcomesTransferID = null;

    /**
     * Outcome Transfer Intake
     * @var integer
     */
    private $outcomesTransferIntakeID = null;

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
     * Transfer Reason
     * @var string
     */
    private $outcomesTransferReason = null;

    /**
     * Animal
     * @var integer
     */
    private $animalID = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Condition
     * @var string
     */
    private $animalConditionName = null;

    /**
     * Receive Name
     * @var string
     */
    private $receiveName = null;


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
        return 'search';
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
     * Set Outcome Transfer Intake
     *
     * @param integer $outcomesTransferIntakeID
     * @return $this
     */
    public function setOutcomesTransferIntakeID($outcomesTransferIntakeID)
    {
        $this->outcomesTransferIntakeID = $outcomesTransferIntakeID;

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
     * Set Transfer Reason
     *
     * @param string $outcomesTransferReason
     * @return $this
     */
    public function setOutcomesTransferReason($outcomesTransferReason)
    {
        $this->outcomesTransferReason = $outcomesTransferReason;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $animalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $animalConditionName
     * @return $this
     */
    public function setAnimalConditionName($animalConditionName)
    {
        $this->animalConditionName = $animalConditionName;

        return $this;
    }

    /**
     * Set Receive Name
     *
     * @param string $receiveName
     * @return $this
     */
    public function setReceiveName($receiveName)
    {
        $this->receiveName = $receiveName;

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
        if ($this->outcomesTransferIntakeID !== null) $parameterArray['outcomesTransferIntakeID'] = $this->outcomesTransferIntakeID;
        if ($this->outcomesTransferAnimalConditionID !== null) $parameterArray['outcomesTransferAnimalConditionID'] = $this->outcomesTransferAnimalConditionID;
        if ($this->outcomesTransferDate !== null) $parameterArray['outcomesTransferDate'] = $this->outcomesTransferDate;
        if ($this->outcomesTransferNotes !== null) $parameterArray['outcomesTransferNotes'] = $this->outcomesTransferNotes;
        if ($this->outcomesTransferReceiveID !== null) $parameterArray['outcomesTransferReceiveID'] = $this->outcomesTransferReceiveID;
        if ($this->outcomesTransferCoalitionMember !== null) $parameterArray['outcomesTransferCoalitionMember'] = $this->outcomesTransferCoalitionMember;
        if ($this->outcomesTransferReasonID !== null) $parameterArray['outcomesTransferReasonID'] = $this->outcomesTransferReasonID;
        if ($this->outcomesTransferReason !== null) $parameterArray['outcomesTransferReason'] = $this->outcomesTransferReason;
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->receiveName !== null) $parameterArray['receiveName'] = $this->receiveName;

        $this->addSearchParameters($parameterArray);

    }
}