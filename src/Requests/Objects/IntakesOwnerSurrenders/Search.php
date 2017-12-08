<?php
/**
 * IntakesOwnerSurrenders Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerSurrenders;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Owner Surrender
     * @var integer
     */
    private $intakesOwnersurrenderID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesOwnersurrenderAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesOwnersurrenderAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesOwnersurrenderDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesOwnersurrenderNotes = null;

    /**
     * Surrendered By
     * @var integer
     */
    private $intakesOwnersurrenderOwnerID = null;

    /**
     * Surrender Reason
     * @var integer
     */
    private $intakesOwnersurrenderReasonID = null;

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
     * Surrendered By
     * @var string
     */
    private $ownerName = null;

    /**
     * Surrender Reason
     * @var string
     */
    private $surrenderReason = null;


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
        return 'intakesOwnersurrenders';
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
     * @param integer $intakesOwnersurrenderID
     * @return $this
     */
    public function setIntakesOwnersurrenderID($intakesOwnersurrenderID)
    {
        $this->intakesOwnersurrenderID = $intakesOwnersurrenderID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesOwnersurrenderAnimalID
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalID($intakesOwnersurrenderAnimalID)
    {
        $this->intakesOwnersurrenderAnimalID = $intakesOwnersurrenderAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesOwnersurrenderAnimalConditionID
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalConditionID($intakesOwnersurrenderAnimalConditionID)
    {
        $this->intakesOwnersurrenderAnimalConditionID = $intakesOwnersurrenderAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesOwnersurrenderDate
     * @return $this
     */
    public function setIntakesOwnersurrenderDate($intakesOwnersurrenderDate)
    {
        $this->intakesOwnersurrenderDate = $intakesOwnersurrenderDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesOwnersurrenderNotes
     * @return $this
     */
    public function setIntakesOwnersurrenderNotes($intakesOwnersurrenderNotes)
    {
        $this->intakesOwnersurrenderNotes = $intakesOwnersurrenderNotes;

        return $this;
    }

    /**
     * Set Surrendered By
     *
     * @param integer $intakesOwnersurrenderOwnerID
     * @return $this
     */
    public function setIntakesOwnersurrenderOwnerID($intakesOwnersurrenderOwnerID)
    {
        $this->intakesOwnersurrenderOwnerID = $intakesOwnersurrenderOwnerID;

        return $this;
    }

    /**
     * Set Surrender Reason
     *
     * @param integer $intakesOwnersurrenderReasonID
     * @return $this
     */
    public function setIntakesOwnersurrenderReasonID($intakesOwnersurrenderReasonID)
    {
        $this->intakesOwnersurrenderReasonID = $intakesOwnersurrenderReasonID;

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
     * Set Surrendered By
     *
     * @param string $ownerName
     * @return $this
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Set Surrender Reason
     *
     * @param string $surrenderReason
     * @return $this
     */
    public function setSurrenderReason($surrenderReason)
    {
        $this->surrenderReason = $surrenderReason;

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
        if ($this->intakesOwnersurrenderID !== null) $parameterArray['intakesOwnersurrenderID'] = $this->intakesOwnersurrenderID;
        if ($this->intakesOwnersurrenderAnimalID !== null) $parameterArray['intakesOwnersurrenderAnimalID'] = $this->intakesOwnersurrenderAnimalID;
        if ($this->intakesOwnersurrenderAnimalConditionID !== null) $parameterArray['intakesOwnersurrenderAnimalConditionID'] = $this->intakesOwnersurrenderAnimalConditionID;
        if ($this->intakesOwnersurrenderDate !== null) $parameterArray['intakesOwnersurrenderDate'] = $this->intakesOwnersurrenderDate;
        if ($this->intakesOwnersurrenderNotes !== null) $parameterArray['intakesOwnersurrenderNotes'] = $this->intakesOwnersurrenderNotes;
        if ($this->intakesOwnersurrenderOwnerID !== null) $parameterArray['intakesOwnersurrenderOwnerID'] = $this->intakesOwnersurrenderOwnerID;
        if ($this->intakesOwnersurrenderReasonID !== null) $parameterArray['intakesOwnersurrenderReasonID'] = $this->intakesOwnersurrenderReasonID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->ownerName !== null) $parameterArray['ownerName'] = $this->ownerName;
        if ($this->surrenderReason !== null) $parameterArray['surrenderReason'] = $this->surrenderReason;

        $this->addSearchParameters($parameterArray);

    }
}