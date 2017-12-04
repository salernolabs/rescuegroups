<?php
/**
 * IntakesBorninrescueshelter Change Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\IntakesBorninrescueshelter;

class Change implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Intake
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesBorninrescueshelterAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesBorninrescueshelterAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesBorninrescueshelterDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesBorninrescueshelterNotes = null;


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
        return 'intakesBorninrescueshelter';
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
     * Set Intake
     *
     * @param integer $intakeID
     * @return $this
     */
    public function setIntakeID($intakeID)
    {
        $this->intakeID = $intakeID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesBorninrescueshelterAnimalID
     * @return $this
     */
    public function setIntakesBorninrescueshelterAnimalID($intakesBorninrescueshelterAnimalID)
    {
        $this->intakesBorninrescueshelterAnimalID = $intakesBorninrescueshelterAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesBorninrescueshelterAnimalConditionID
     * @return $this
     */
    public function setIntakesBorninrescueshelterAnimalConditionID($intakesBorninrescueshelterAnimalConditionID)
    {
        $this->intakesBorninrescueshelterAnimalConditionID = $intakesBorninrescueshelterAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesBorninrescueshelterDate
     * @return $this
     */
    public function setIntakesBorninrescueshelterDate($intakesBorninrescueshelterDate)
    {
        $this->intakesBorninrescueshelterDate = $intakesBorninrescueshelterDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesBorninrescueshelterNotes
     * @return $this
     */
    public function setIntakesBorninrescueshelterNotes($intakesBorninrescueshelterNotes)
    {
        $this->intakesBorninrescueshelterNotes = $intakesBorninrescueshelterNotes;

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
        if ($this->intakeID !== null) $parameterArray['intakeID'] = $this->intakeID;
        if ($this->intakesBorninrescueshelterAnimalID !== null) $parameterArray['intakesBorninrescueshelterAnimalID'] = $this->intakesBorninrescueshelterAnimalID;
        if ($this->intakesBorninrescueshelterAnimalConditionID !== null) $parameterArray['intakesBorninrescueshelterAnimalConditionID'] = $this->intakesBorninrescueshelterAnimalConditionID;
        if ($this->intakesBorninrescueshelterDate !== null) $parameterArray['intakesBorninrescueshelterDate'] = $this->intakesBorninrescueshelterDate;
        if ($this->intakesBorninrescueshelterNotes !== null) $parameterArray['intakesBorninrescueshelterNotes'] = $this->intakesBorninrescueshelterNotes;

    }
}