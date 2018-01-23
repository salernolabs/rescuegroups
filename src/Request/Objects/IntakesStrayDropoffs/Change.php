<?php
/**
 * IntakesStrayDropoffs Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesStraydropoffs';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'change';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Intake
     *
     * @var integer
     */
    private $intakeId = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $animalId = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $animalConditionId = null;

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
     * Found Location
     *
     * @var string
     */
    private $foundLocation = null;

    /**
     * Found Street address
     *
     * @var string
     */
    private $foundAddress = null;

    /**
     * Found City
     *
     * @var string
     */
    private $foundCity = null;

    /**
     * Found State/Province
     *
     * @var string
     */
    private $foundState = null;

    /**
     * Found Postal Code
     *
     * @var string
     */
    private $foundPostalcode = null;

    /**
     * Dropped off by
     *
     * @var integer
     */
    private $finderId = null;


    /**
     * Set Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakeId($value)
    {
        $this->intakeId = $value;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalId($value)
    {
        $this->animalId = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalConditionId($value)
    {
        $this->animalConditionId = $value;

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
     * Set Found Location
     *
     * @param string $value
     * @return $this
     */
    public function setFoundLocation($value)
    {
        $this->foundLocation = $value;

        return $this;
    }

    /**
     * Set Found Street address
     *
     * @param string $value
     * @return $this
     */
    public function setFoundAddress($value)
    {
        $this->foundAddress = $value;

        return $this;
    }

    /**
     * Set Found City
     *
     * @param string $value
     * @return $this
     */
    public function setFoundCity($value)
    {
        $this->foundCity = $value;

        return $this;
    }

    /**
     * Set Found State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setFoundState($value)
    {
        $this->foundState = $value;

        return $this;
    }

    /**
     * Set Found Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setFoundPostalcode($value)
    {
        $this->foundPostalcode = $value;

        return $this;
    }

    /**
     * Set Dropped off by
     *
     * @param integer $value
     * @return $this
     */
    public function setFinderId($value)
    {
        $this->finderId = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakeId !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeId];
        if ($this->animalId !== null) $parameterArray['values'][] = ["intakesStraydropoffAnimalID"=>$this->animalId];
        if ($this->animalConditionId !== null) $parameterArray['values'][] = ["intakesStraydropoffAnimalConditionID"=>$this->animalConditionId];
        if ($this->date !== null) $parameterArray['values'][] = ["intakesStraydropoffDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["intakesStraydropoffNotes"=>$this->notes];
        if ($this->foundLocation !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundLocation"=>$this->foundLocation];
        if ($this->foundAddress !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundAddress"=>$this->foundAddress];
        if ($this->foundCity !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundCity"=>$this->foundCity];
        if ($this->foundState !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundState"=>$this->foundState];
        if ($this->foundPostalcode !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundPostalcode"=>$this->foundPostalcode];
        if ($this->finderId !== null) $parameterArray['values'][] = ["intakesStraydropoffFinderID"=>$this->finderId];
    }
}