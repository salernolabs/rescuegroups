<?php
/**
 * IntakesBornInRescueShelter Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesBornInRescueShelter;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Born In Rescue/Shelter
     * @var integer
     */
    private $id = null;

    /**
     * Animal
     * @var integer
     */
    private $animalID = null;

    /**
     * Condition
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $date = null;

    /**
     * Notes
     * @var string
     */
    private $notes = null;


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
        return 'edit';
    }

    /**
     * Set Born In Rescue/Shelter
     *
     * @param integer $intakesBorninrescueshelterID
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesBorninrescueshelterAnimalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesBorninrescueshelterAnimalConditionID
     * @return $this
     */
    public function setAnimalConditionID($animalConditionID)
    {
        $this->animalConditionID = $animalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesBorninrescueshelterDate
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesBorninrescueshelterNotes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

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
        if ($this->id !== null) $parameterArray['intakesBorninrescueshelterID'] = $this->id;
        if ($this->animalID !== null) $parameterArray['intakesBorninrescueshelterAnimalID'] = $this->animalID;
        if ($this->animalConditionID !== null) $parameterArray['intakesBorninrescueshelterAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $parameterArray['intakesBorninrescueshelterDate'] = $this->date;
        if ($this->notes !== null) $parameterArray['intakesBorninrescueshelterNotes'] = $this->notes;

    }
}