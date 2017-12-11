<?php
/**
 * IntakesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesTransfers;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Owner Surrender
     * @var integer
     */
    private $intakesTransferID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesTransferAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesTransferAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesTransferDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesTransferNotes = null;

    /**
     * Transferred From
     * @var integer
     */
    private $intakesTransferFromID = null;

    /**
     * Coalition Member
     * @var string
     */
    private $intakesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     * @var integer
     */
    private $intakesTransferReasonID = null;

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
     * Transfer From
     * @var string
     */
    private $transferFromName = null;

    /**
     * Transfer Reason
     * @var string
     */
    private $transferReason = null;


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
        return 'intakesTransfers';
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
     * Set Owner Surrender
     *
     * @param integer $intakesTransferID
     * @return $this
     */
    public function setIntakesTransferID($intakesTransferID)
    {
        $this->intakesTransferID = $intakesTransferID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesTransferAnimalID
     * @return $this
     */
    public function setIntakesTransferAnimalID($intakesTransferAnimalID)
    {
        $this->intakesTransferAnimalID = $intakesTransferAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesTransferAnimalConditionID
     * @return $this
     */
    public function setIntakesTransferAnimalConditionID($intakesTransferAnimalConditionID)
    {
        $this->intakesTransferAnimalConditionID = $intakesTransferAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesTransferDate
     * @return $this
     */
    public function setIntakesTransferDate($intakesTransferDate)
    {
        $this->intakesTransferDate = $intakesTransferDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesTransferNotes
     * @return $this
     */
    public function setIntakesTransferNotes($intakesTransferNotes)
    {
        $this->intakesTransferNotes = $intakesTransferNotes;

        return $this;
    }

    /**
     * Set Transferred From
     *
     * @param integer $intakesTransferFromID
     * @return $this
     */
    public function setIntakesTransferFromID($intakesTransferFromID)
    {
        $this->intakesTransferFromID = $intakesTransferFromID;

        return $this;
    }

    /**
     * Set Coalition Member
     *
     * @param string $intakesTransferCoalitionMember
     * @return $this
     */
    public function setIntakesTransferCoalitionMember($intakesTransferCoalitionMember)
    {
        $this->intakesTransferCoalitionMember = $intakesTransferCoalitionMember;

        return $this;
    }

    /**
     * Set Transfer Reason
     *
     * @param integer $intakesTransferReasonID
     * @return $this
     */
    public function setIntakesTransferReasonID($intakesTransferReasonID)
    {
        $this->intakesTransferReasonID = $intakesTransferReasonID;

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
     * Set Transfer From
     *
     * @param string $transferFromName
     * @return $this
     */
    public function setTransferFromName($transferFromName)
    {
        $this->transferFromName = $transferFromName;

        return $this;
    }

    /**
     * Set Transfer Reason
     *
     * @param string $transferReason
     * @return $this
     */
    public function setTransferReason($transferReason)
    {
        $this->transferReason = $transferReason;

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
        if ($this->intakesTransferID !== null) $parameterArray['intakesTransferID'] = $this->intakesTransferID;
        if ($this->intakesTransferAnimalID !== null) $parameterArray['intakesTransferAnimalID'] = $this->intakesTransferAnimalID;
        if ($this->intakesTransferAnimalConditionID !== null) $parameterArray['intakesTransferAnimalConditionID'] = $this->intakesTransferAnimalConditionID;
        if ($this->intakesTransferDate !== null) $parameterArray['intakesTransferDate'] = $this->intakesTransferDate;
        if ($this->intakesTransferNotes !== null) $parameterArray['intakesTransferNotes'] = $this->intakesTransferNotes;
        if ($this->intakesTransferFromID !== null) $parameterArray['intakesTransferFromID'] = $this->intakesTransferFromID;
        if ($this->intakesTransferCoalitionMember !== null) $parameterArray['intakesTransferCoalitionMember'] = $this->intakesTransferCoalitionMember;
        if ($this->intakesTransferReasonID !== null) $parameterArray['intakesTransferReasonID'] = $this->intakesTransferReasonID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->transferFromName !== null) $parameterArray['transferFromName'] = $this->transferFromName;
        if ($this->transferReason !== null) $parameterArray['transferReason'] = $this->transferReason;

        $this->addSearchParameters($parameterArray);

    }
}