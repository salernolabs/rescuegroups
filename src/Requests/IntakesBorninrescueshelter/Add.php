<?php
/**
 * IntakesBorninrescueshelter Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\IntakesBorninrescueshelter;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
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
        return 'add';
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
        if ($this->intakesBorninrescueshelterAnimalID !== null) $parameterArray['intakesBorninrescueshelterAnimalID'] = $this->intakesBorninrescueshelterAnimalID;
        if ($this->intakesBorninrescueshelterAnimalConditionID !== null) $parameterArray['intakesBorninrescueshelterAnimalConditionID'] = $this->intakesBorninrescueshelterAnimalConditionID;
        if ($this->intakesBorninrescueshelterDate !== null) $parameterArray['intakesBorninrescueshelterDate'] = $this->intakesBorninrescueshelterDate;
        if ($this->intakesBorninrescueshelterNotes !== null) $parameterArray['intakesBorninrescueshelterNotes'] = $this->intakesBorninrescueshelterNotes;

    }
}