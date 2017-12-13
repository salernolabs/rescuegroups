<?php
/**
 * Outcomes Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Outcomes;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Outcome ID
     * @var integer
     */
    private $outcomeID = null;

    /**
     * Condition ID
     * @var integer
     */
    private $outcomeAnimalConditionID = null;

    /**
     * Type
     * @var string
     */
    private $outcomeType = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomeDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomeNotes = null;

    /**
     * Intake ID
     * @var integer
     */
    private $intakeID = null;

    /**
     * Animal ID
     * @var integer
     */
    private $intakeAnimalID = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Condition
     * @var string
     */
    private $outcomeAnimalConditionName = null;


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
        return 'outcomes';
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
     * Set Outcome ID
     *
     * @param integer $outcomeID
     * @return $this
     */
    public function setOutcomeID($outcomeID)
    {
        $this->outcomeID = $outcomeID;

        return $this;
    }

    /**
     * Set Condition ID
     *
     * @param integer $outcomeAnimalConditionID
     * @return $this
     */
    public function setOutcomeAnimalConditionID($outcomeAnimalConditionID)
    {
        $this->outcomeAnimalConditionID = $outcomeAnimalConditionID;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $outcomeType
     * @return $this
     */
    public function setOutcomeType($outcomeType)
    {
        $this->outcomeType = $outcomeType;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomeDate
     * @return $this
     */
    public function setOutcomeDate($outcomeDate)
    {
        $this->outcomeDate = $outcomeDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomeNotes
     * @return $this
     */
    public function setOutcomeNotes($outcomeNotes)
    {
        $this->outcomeNotes = $outcomeNotes;

        return $this;
    }

    /**
     * Set Intake ID
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
     * Set Animal ID
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
     * @param string $outcomeAnimalConditionName
     * @return $this
     */
    public function setOutcomeAnimalConditionName($outcomeAnimalConditionName)
    {
        $this->outcomeAnimalConditionName = $outcomeAnimalConditionName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->outcomeID !== null) $parameterArray['outcomeID'] = $this->outcomeID;
        if ($this->outcomeAnimalConditionID !== null) $parameterArray['outcomeAnimalConditionID'] = $this->outcomeAnimalConditionID;
        if ($this->outcomeType !== null) $parameterArray['outcomeType'] = $this->outcomeType;
        if ($this->outcomeDate !== null) $parameterArray['outcomeDate'] = $this->outcomeDate;
        if ($this->outcomeNotes !== null) $parameterArray['outcomeNotes'] = $this->outcomeNotes;
        if ($this->intakeID !== null) $parameterArray['intakeID'] = $this->intakeID;
        if ($this->intakeAnimalID !== null) $parameterArray['intakeAnimalID'] = $this->intakeAnimalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->outcomeAnimalConditionName !== null) $parameterArray['outcomeAnimalConditionName'] = $this->outcomeAnimalConditionName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\Outcome[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\Outcome($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\Outcome($data)];
    }

}