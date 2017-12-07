<?php
/**
 * IntakesBornInRescueShelter Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Requests\Objects\IntakesBornInRescueShelter;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

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
        return 'intakesBorninrescueshelter';
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
        if ($this->id !== null) $parameterArray['intakesBorninrescueshelterID'] = $this->id;
        if ($this->animalID !== null) $parameterArray['intakesBorninrescueshelterAnimalID'] = $this->animalID;
        if ($this->animalConditionID !== null) $parameterArray['intakesBorninrescueshelterAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $parameterArray['intakesBorninrescueshelterDate'] = $this->date;
        if ($this->notes !== null) $parameterArray['intakesBorninrescueshelterNotes'] = $this->notes;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;

        $this->addSearchParameters($parameterArray);

    }
}