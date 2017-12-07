<?php
/**
 * OutcomesEuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\OutcomesEuthanasias;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $outcomesEuthanasiaID = null;

    /**
     * Outcome Euthanasia Intake
     * @var integer
     */
    private $outcomesEuthanasiaIntakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesEuthanasiaAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesEuthanasiaDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesEuthanasiaNotes = null;

    /**
     * Euthanasia Reason
     * @var integer
     */
    private $outcomesEuthanasiaReasonID = null;

    /**
     * Euthanasia Reason
     * @var string
     */
    private $outcomesEuthanasiaReason = null;

    /**
     * Animal
     * @var string
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
        return 'outcomesEuthanasias';
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
     * @param integer $outcomesEuthanasiaID
     * @return $this
     */
    public function setOutcomesEuthanasiaID($outcomesEuthanasiaID)
    {
        $this->outcomesEuthanasiaID = $outcomesEuthanasiaID;

        return $this;
    }

    /**
     * Set Outcome Euthanasia Intake
     *
     * @param integer $outcomesEuthanasiaIntakeID
     * @return $this
     */
    public function setOutcomesEuthanasiaIntakeID($outcomesEuthanasiaIntakeID)
    {
        $this->outcomesEuthanasiaIntakeID = $outcomesEuthanasiaIntakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesEuthanasiaAnimalConditionID
     * @return $this
     */
    public function setOutcomesEuthanasiaAnimalConditionID($outcomesEuthanasiaAnimalConditionID)
    {
        $this->outcomesEuthanasiaAnimalConditionID = $outcomesEuthanasiaAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesEuthanasiaDate
     * @return $this
     */
    public function setOutcomesEuthanasiaDate($outcomesEuthanasiaDate)
    {
        $this->outcomesEuthanasiaDate = $outcomesEuthanasiaDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesEuthanasiaNotes
     * @return $this
     */
    public function setOutcomesEuthanasiaNotes($outcomesEuthanasiaNotes)
    {
        $this->outcomesEuthanasiaNotes = $outcomesEuthanasiaNotes;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $outcomesEuthanasiaReasonID
     * @return $this
     */
    public function setOutcomesEuthanasiaReasonID($outcomesEuthanasiaReasonID)
    {
        $this->outcomesEuthanasiaReasonID = $outcomesEuthanasiaReasonID;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param string $outcomesEuthanasiaReason
     * @return $this
     */
    public function setOutcomesEuthanasiaReason($outcomesEuthanasiaReason)
    {
        $this->outcomesEuthanasiaReason = $outcomesEuthanasiaReason;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $animalID
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->outcomesEuthanasiaID !== null) $parameterArray['outcomesEuthanasiaID'] = $this->outcomesEuthanasiaID;
        if ($this->outcomesEuthanasiaIntakeID !== null) $parameterArray['outcomesEuthanasiaIntakeID'] = $this->outcomesEuthanasiaIntakeID;
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $parameterArray['outcomesEuthanasiaAnimalConditionID'] = $this->outcomesEuthanasiaAnimalConditionID;
        if ($this->outcomesEuthanasiaDate !== null) $parameterArray['outcomesEuthanasiaDate'] = $this->outcomesEuthanasiaDate;
        if ($this->outcomesEuthanasiaNotes !== null) $parameterArray['outcomesEuthanasiaNotes'] = $this->outcomesEuthanasiaNotes;
        if ($this->outcomesEuthanasiaReasonID !== null) $parameterArray['outcomesEuthanasiaReasonID'] = $this->outcomesEuthanasiaReasonID;
        if ($this->outcomesEuthanasiaReason !== null) $parameterArray['outcomesEuthanasiaReason'] = $this->outcomesEuthanasiaReason;
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;

        $this->addSearchParameters($parameterArray);

    }
}