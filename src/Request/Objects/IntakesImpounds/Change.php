<?php
/**
 * IntakesImpounds Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesImpounds';

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
     * Impound Location
     *
     * @var string
     */
    private $location = null;

    /**
     * Impound Street address
     *
     * @var string
     */
    private $address = null;

    /**
     * Impound City
     *
     * @var string
     */
    private $city = null;

    /**
     * Impound State/Province
     *
     * @var string
     */
    private $state = null;

    /**
     * Impound Postal Code
     *
     * @var string
     */
    private $postalcode = null;

    /**
     * Impound From
     *
     * @var integer
     */
    private $fromId = null;

    /**
     * Impound Performed By
     *
     * @var integer
     */
    private $staffId = null;

    /**
     * Reason
     *
     * @var integer
     */
    private $reasonId = null;


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
     * Set Impound Location
     *
     * @param string $value
     * @return $this
     */
    public function setLocation($value)
    {
        $this->location = $value;

        return $this;
    }

    /**
     * Set Impound Street address
     *
     * @param string $value
     * @return $this
     */
    public function setAddress($value)
    {
        $this->address = $value;

        return $this;
    }

    /**
     * Set Impound City
     *
     * @param string $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->city = $value;

        return $this;
    }

    /**
     * Set Impound State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setState($value)
    {
        $this->state = $value;

        return $this;
    }

    /**
     * Set Impound Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setPostalcode($value)
    {
        $this->postalcode = $value;

        return $this;
    }

    /**
     * Set Impound From
     *
     * @param integer $value
     * @return $this
     */
    public function setFromId($value)
    {
        $this->fromId = $value;

        return $this;
    }

    /**
     * Set Impound Performed By
     *
     * @param integer $value
     * @return $this
     */
    public function setStaffId($value)
    {
        $this->staffId = $value;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setReasonId($value)
    {
        $this->reasonId = $value;

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

        $value = [];
        if ($this->intakeId !== null) $value["intakeID"] = $this->intakeId;
        if ($this->animalId !== null) $value["intakesImpoundAnimalID"] = $this->animalId;
        if ($this->animalConditionId !== null) $value["intakesImpoundAnimalConditionID"] = $this->animalConditionId;
        if ($this->date !== null) $value["intakesImpoundDate"] = $this->date;
        if ($this->notes !== null) $value["intakesImpoundNotes"] = $this->notes;
        if ($this->location !== null) $value["intakesImpoundLocation"] = $this->location;
        if ($this->address !== null) $value["intakesImpoundAddress"] = $this->address;
        if ($this->city !== null) $value["intakesImpoundCity"] = $this->city;
        if ($this->state !== null) $value["intakesImpoundState"] = $this->state;
        if ($this->postalcode !== null) $value["intakesImpoundPostalcode"] = $this->postalcode;
        if ($this->fromId !== null) $value["intakesImpoundFromID"] = $this->fromId;
        if ($this->staffId !== null) $value["intakesImpoundStaffID"] = $this->staffId;
        if ($this->reasonId !== null) $value["intakesImpoundReasonID"] = $this->reasonId;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}