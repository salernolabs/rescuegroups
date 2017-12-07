<?php
/**
 * IntakesOwnerRequestEdeuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerRequestEdeuthanasias;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Owner requestedeuthanasia
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesOwnerrequestedeuthanasiaDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesOwnerrequestedeuthanasiaNotes = null;

    /**
     * Owner
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaOwnerID = null;

    /**
     * Euthanasia Reason
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaReasonID = null;

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
     * Owner
     * @var string
     */
    private $ownerName = null;

    /**
     * Euthanasia Reason
     * @var string
     */
    private $euthanasiaReason = null;


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
        return 'intakesOwnerrequestedeuthanasias';
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
     * Set Owner requestedeuthanasia
     *
     * @param integer $intakesOwnerrequestedeuthanasiaID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaID($intakesOwnerrequestedeuthanasiaID)
    {
        $this->intakesOwnerrequestedeuthanasiaID = $intakesOwnerrequestedeuthanasiaID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesOwnerrequestedeuthanasiaAnimalID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalID($intakesOwnerrequestedeuthanasiaAnimalID)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalID = $intakesOwnerrequestedeuthanasiaAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesOwnerrequestedeuthanasiaAnimalConditionID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaAnimalConditionID($intakesOwnerrequestedeuthanasiaAnimalConditionID)
    {
        $this->intakesOwnerrequestedeuthanasiaAnimalConditionID = $intakesOwnerrequestedeuthanasiaAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesOwnerrequestedeuthanasiaDate
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaDate($intakesOwnerrequestedeuthanasiaDate)
    {
        $this->intakesOwnerrequestedeuthanasiaDate = $intakesOwnerrequestedeuthanasiaDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesOwnerrequestedeuthanasiaNotes
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaNotes($intakesOwnerrequestedeuthanasiaNotes)
    {
        $this->intakesOwnerrequestedeuthanasiaNotes = $intakesOwnerrequestedeuthanasiaNotes;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $intakesOwnerrequestedeuthanasiaOwnerID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaOwnerID($intakesOwnerrequestedeuthanasiaOwnerID)
    {
        $this->intakesOwnerrequestedeuthanasiaOwnerID = $intakesOwnerrequestedeuthanasiaOwnerID;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $intakesOwnerrequestedeuthanasiaReasonID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaReasonID($intakesOwnerrequestedeuthanasiaReasonID)
    {
        $this->intakesOwnerrequestedeuthanasiaReasonID = $intakesOwnerrequestedeuthanasiaReasonID;

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
     * Set Owner
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
     * Set Euthanasia Reason
     *
     * @param string $euthanasiaReason
     * @return $this
     */
    public function setEuthanasiaReason($euthanasiaReason)
    {
        $this->euthanasiaReason = $euthanasiaReason;

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
        if ($this->intakesOwnerrequestedeuthanasiaID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaID'] = $this->intakesOwnerrequestedeuthanasiaID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaAnimalID'] = $this->intakesOwnerrequestedeuthanasiaAnimalID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalConditionID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaAnimalConditionID'] = $this->intakesOwnerrequestedeuthanasiaAnimalConditionID;
        if ($this->intakesOwnerrequestedeuthanasiaDate !== null) $parameterArray['intakesOwnerrequestedeuthanasiaDate'] = $this->intakesOwnerrequestedeuthanasiaDate;
        if ($this->intakesOwnerrequestedeuthanasiaNotes !== null) $parameterArray['intakesOwnerrequestedeuthanasiaNotes'] = $this->intakesOwnerrequestedeuthanasiaNotes;
        if ($this->intakesOwnerrequestedeuthanasiaOwnerID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaOwnerID'] = $this->intakesOwnerrequestedeuthanasiaOwnerID;
        if ($this->intakesOwnerrequestedeuthanasiaReasonID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaReasonID'] = $this->intakesOwnerrequestedeuthanasiaReasonID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->ownerName !== null) $parameterArray['ownerName'] = $this->ownerName;
        if ($this->euthanasiaReason !== null) $parameterArray['euthanasiaReason'] = $this->euthanasiaReason;

        $this->addSearchParameters($parameterArray);

    }
}