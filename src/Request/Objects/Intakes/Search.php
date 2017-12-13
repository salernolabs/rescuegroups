<?php
/**
 * Intakes Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Intakes;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Intake
     * @var integer
     */
    private $intakeID = null;

    /**
     * Outcome
     * @var integer
     */
    private $intakeOutcomeID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakeAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakeAnimalConditionID = null;

    /**
     * Type
     * @var string
     */
    private $intakeType = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakeDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakeNotes = null;

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
        return 'intakes';
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
     * Set Outcome
     *
     * @param integer $intakeOutcomeID
     * @return $this
     */
    public function setIntakeOutcomeID($intakeOutcomeID)
    {
        $this->intakeOutcomeID = $intakeOutcomeID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakeAnimalID
     * @return $this
     */
    public function setIntakeAnimalID($intakeAnimalID)
    {
        $this->intakeAnimalID = $intakeAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakeAnimalConditionID
     * @return $this
     */
    public function setIntakeAnimalConditionID($intakeAnimalConditionID)
    {
        $this->intakeAnimalConditionID = $intakeAnimalConditionID;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $intakeType
     * @return $this
     */
    public function setIntakeType($intakeType)
    {
        $this->intakeType = $intakeType;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakeDate
     * @return $this
     */
    public function setIntakeDate($intakeDate)
    {
        $this->intakeDate = $intakeDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakeNotes
     * @return $this
     */
    public function setIntakeNotes($intakeNotes)
    {
        $this->intakeNotes = $intakeNotes;

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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakeID !== null) $parameterArray['intakeID'] = $this->intakeID;
        if ($this->intakeOutcomeID !== null) $parameterArray['intakeOutcomeID'] = $this->intakeOutcomeID;
        if ($this->intakeAnimalID !== null) $parameterArray['intakeAnimalID'] = $this->intakeAnimalID;
        if ($this->intakeAnimalConditionID !== null) $parameterArray['intakeAnimalConditionID'] = $this->intakeAnimalConditionID;
        if ($this->intakeType !== null) $parameterArray['intakeType'] = $this->intakeType;
        if ($this->intakeDate !== null) $parameterArray['intakeDate'] = $this->intakeDate;
        if ($this->intakeNotes !== null) $parameterArray['intakeNotes'] = $this->intakeNotes;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\Intake[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\Intake($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\Intake($data)];
    }

}