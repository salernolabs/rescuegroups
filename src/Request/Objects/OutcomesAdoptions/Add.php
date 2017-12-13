<?php
/**
 * OutcomesAdoptions Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Outcome Adoption Intake
     * @var integer
     */
    private $outcomesAdoptionIntakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesAdoptionAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesAdoptionDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesAdoptionNotes = null;

    /**
     * Adoption
     * @var integer
     */
    private $outcomesAdoptionAdoptionID = null;


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
        return 'outcomesAdoptions';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Set Outcome Adoption Intake
     *
     * @param integer $outcomesAdoptionIntakeID
     * @return $this
     */
    public function setOutcomesAdoptionIntakeID($outcomesAdoptionIntakeID)
    {
        $this->outcomesAdoptionIntakeID = $outcomesAdoptionIntakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesAdoptionAnimalConditionID
     * @return $this
     */
    public function setOutcomesAdoptionAnimalConditionID($outcomesAdoptionAnimalConditionID)
    {
        $this->outcomesAdoptionAnimalConditionID = $outcomesAdoptionAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesAdoptionDate
     * @return $this
     */
    public function setOutcomesAdoptionDate($outcomesAdoptionDate)
    {
        $this->outcomesAdoptionDate = $outcomesAdoptionDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesAdoptionNotes
     * @return $this
     */
    public function setOutcomesAdoptionNotes($outcomesAdoptionNotes)
    {
        $this->outcomesAdoptionNotes = $outcomesAdoptionNotes;

        return $this;
    }

    /**
     * Set Adoption
     *
     * @param integer $outcomesAdoptionAdoptionID
     * @return $this
     */
    public function setOutcomesAdoptionAdoptionID($outcomesAdoptionAdoptionID)
    {
        $this->outcomesAdoptionAdoptionID = $outcomesAdoptionAdoptionID;

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
        if ($this->outcomesAdoptionIntakeID !== null) $parameterArray['outcomesAdoptionIntakeID'] = $this->outcomesAdoptionIntakeID;
        if ($this->outcomesAdoptionAnimalConditionID !== null) $parameterArray['outcomesAdoptionAnimalConditionID'] = $this->outcomesAdoptionAnimalConditionID;
        if ($this->outcomesAdoptionDate !== null) $parameterArray['outcomesAdoptionDate'] = $this->outcomesAdoptionDate;
        if ($this->outcomesAdoptionNotes !== null) $parameterArray['outcomesAdoptionNotes'] = $this->outcomesAdoptionNotes;
        if ($this->outcomesAdoptionAdoptionID !== null) $parameterArray['outcomesAdoptionAdoptionID'] = $this->outcomesAdoptionAdoptionID;

    }
}