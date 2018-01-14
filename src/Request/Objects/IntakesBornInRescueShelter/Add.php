<?php
/**
 * IntakesBornInRescueShelter Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesBornInRescueShelter;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     *
     * @var integer
     */
    private $animalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $animalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $date = null;

    /**
     * Notes
     *
     * @var string
     */
    private $notes = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalID($value)
    {
        $this->animalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalConditionID($value)
    {
        $this->animalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setDate($value)
    {
        $this->date = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setNotes($value)
    {
        $this->notes = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->animalID !== null) $parameterArray['values'][] = ["intakesBorninrescueshelterAnimalID"=>$this->animalID];
        if ($this->animalConditionID !== null) $parameterArray['values'][] = ["intakesBorninrescueshelterAnimalConditionID"=>$this->animalConditionID];
        if ($this->date !== null) $parameterArray['values'][] = ["intakesBorninrescueshelterDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["intakesBorninrescueshelterNotes"=>$this->notes];
    }
}