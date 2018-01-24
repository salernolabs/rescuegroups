<?php
/**
 * IntakesStrayPickups Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesStraypickups';

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
     * Pickup Location
     *
     * @var string
     */
    private $location = null;

    /**
     * Pickup Street address
     *
     * @var string
     */
    private $address = null;

    /**
     * Pickup City
     *
     * @var string
     */
    private $city = null;

    /**
     * Pickup State/Province
     *
     * @var string
     */
    private $state = null;

    /**
     * Pickup Postal Code
     *
     * @var string
     */
    private $postalcode = null;

    /**
     * Found By
     *
     * @var integer
     */
    private $finderId = null;

    /**
     * Pickup By
     *
     * @var integer
     */
    private $staffId = null;


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
     * Set Pickup Location
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
     * Set Pickup Street address
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
     * Set Pickup City
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
     * Set Pickup State/Province
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
     * Set Pickup Postal Code
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
     * Set Found By
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
     * Set Pickup By
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];
        if ($this->intakeId !== null) $value["intakeID"] = $this->intakeId;
        if ($this->animalId !== null) $value["intakesStraypickupAnimalID"] = $this->animalId;
        if ($this->animalConditionId !== null) $value["intakesStraypickupAnimalConditionID"] = $this->animalConditionId;
        if ($this->date !== null) $value["intakesStraypickupDate"] = $this->date;
        if ($this->notes !== null) $value["intakesStraypickupNotes"] = $this->notes;
        if ($this->location !== null) $value["intakesStraypickupLocation"] = $this->location;
        if ($this->address !== null) $value["intakesStraypickupAddress"] = $this->address;
        if ($this->city !== null) $value["intakesStraypickupCity"] = $this->city;
        if ($this->state !== null) $value["intakesStraypickupState"] = $this->state;
        if ($this->postalcode !== null) $value["intakesStraypickupPostalcode"] = $this->postalcode;
        if ($this->finderId !== null) $value["intakesStraypickupFinderID"] = $this->finderId;
        if ($this->staffId !== null) $value["intakesStraypickupStaffID"] = $this->staffId;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}