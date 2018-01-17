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
    private $intakeID = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $intakesStraydropoffAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesStraydropoffAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesStraydropoffDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesStraydropoffNotes = null;

    /**
     * Found Location
     *
     * @var string
     */
    private $intakesStraydropoffFoundLocation = null;

    /**
     * Found Street address
     *
     * @var string
     */
    private $intakesStraydropoffFoundAddress = null;

    /**
     * Found City
     *
     * @var string
     */
    private $intakesStraydropoffFoundCity = null;

    /**
     * Found State/Province
     *
     * @var string
     */
    private $intakesStraydropoffFoundState = null;

    /**
     * Found Postal Code
     *
     * @var string
     */
    private $intakesStraydropoffFoundPostalcode = null;

    /**
     * Dropped off by
     *
     * @var integer
     */
    private $intakesStraydropoffFinderID = null;


    /**
     * Set Intake
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakeID($value)
    {
        $this->intakeID = $value;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraydropoffAnimalID($value)
    {
        $this->intakesStraydropoffAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraydropoffAnimalConditionID($value)
    {
        $this->intakesStraydropoffAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesStraydropoffDate($value)
    {
        $this->intakesStraydropoffDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffNotes($value)
    {
        $this->intakesStraydropoffNotes = $value;

        return $this;
    }

    /**
     * Set Found Location
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffFoundLocation($value)
    {
        $this->intakesStraydropoffFoundLocation = $value;

        return $this;
    }

    /**
     * Set Found Street address
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffFoundAddress($value)
    {
        $this->intakesStraydropoffFoundAddress = $value;

        return $this;
    }

    /**
     * Set Found City
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffFoundCity($value)
    {
        $this->intakesStraydropoffFoundCity = $value;

        return $this;
    }

    /**
     * Set Found State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffFoundState($value)
    {
        $this->intakesStraydropoffFoundState = $value;

        return $this;
    }

    /**
     * Set Found Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesStraydropoffFoundPostalcode($value)
    {
        $this->intakesStraydropoffFoundPostalcode = $value;

        return $this;
    }

    /**
     * Set Dropped off by
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraydropoffFinderID($value)
    {
        $this->intakesStraydropoffFinderID = $value;

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

        if ($this->intakeID !== null) $parameterArray['values'][] = ["intakeID"=>$this->intakeID];
        if ($this->intakesStraydropoffAnimalID !== null) $parameterArray['values'][] = ["intakesStraydropoffAnimalID"=>$this->intakesStraydropoffAnimalID];
        if ($this->intakesStraydropoffAnimalConditionID !== null) $parameterArray['values'][] = ["intakesStraydropoffAnimalConditionID"=>$this->intakesStraydropoffAnimalConditionID];
        if ($this->intakesStraydropoffDate !== null) $parameterArray['values'][] = ["intakesStraydropoffDate"=>$this->intakesStraydropoffDate];
        if ($this->intakesStraydropoffNotes !== null) $parameterArray['values'][] = ["intakesStraydropoffNotes"=>$this->intakesStraydropoffNotes];
        if ($this->intakesStraydropoffFoundLocation !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundLocation"=>$this->intakesStraydropoffFoundLocation];
        if ($this->intakesStraydropoffFoundAddress !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundAddress"=>$this->intakesStraydropoffFoundAddress];
        if ($this->intakesStraydropoffFoundCity !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundCity"=>$this->intakesStraydropoffFoundCity];
        if ($this->intakesStraydropoffFoundState !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundState"=>$this->intakesStraydropoffFoundState];
        if ($this->intakesStraydropoffFoundPostalcode !== null) $parameterArray['values'][] = ["intakesStraydropoffFoundPostalcode"=>$this->intakesStraydropoffFoundPostalcode];
        if ($this->intakesStraydropoffFinderID !== null) $parameterArray['values'][] = ["intakesStraydropoffFinderID"=>$this->intakesStraydropoffFinderID];
    }
}