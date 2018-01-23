<?php
/**
 * OutcomesReleases Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReleases;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesReleases';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'change';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Outcome
     *
     * @var integer
     */
    private $outcomeId = null;

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
     * Location
     *
     * @var string
     */
    private $location = null;

    /**
     * Street address
     *
     * @var string
     */
    private $address = null;

    /**
     * City
     *
     * @var string
     */
    private $city = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $state = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $postalcode = null;

    /**
     * Released By
     *
     * @var integer
     */
    private $byId = null;


    /**
     * Set Outcome
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomeId($value)
    {
        $this->outcomeId = $value;

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
     * Set Location
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
     * Set Street address
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
     * Set City
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
     * Set State/Province
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
     * Set Postal Code
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
     * Set Released By
     *
     * @param integer $value
     * @return $this
     */
    public function setById($value)
    {
        $this->byId = $value;

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

        if ($this->outcomeId !== null) $parameterArray['values'][] = ["outcomeID"=>$this->outcomeId];
        if ($this->animalConditionId !== null) $parameterArray['values'][] = ["outcomesReleaseAnimalConditionID"=>$this->animalConditionId];
        if ($this->date !== null) $parameterArray['values'][] = ["outcomesReleaseDate"=>$this->date];
        if ($this->notes !== null) $parameterArray['values'][] = ["outcomesReleaseNotes"=>$this->notes];
        if ($this->location !== null) $parameterArray['values'][] = ["outcomesReleaseLocation"=>$this->location];
        if ($this->address !== null) $parameterArray['values'][] = ["outcomesReleaseAddress"=>$this->address];
        if ($this->city !== null) $parameterArray['values'][] = ["outcomesReleaseCity"=>$this->city];
        if ($this->state !== null) $parameterArray['values'][] = ["outcomesReleaseState"=>$this->state];
        if ($this->postalcode !== null) $parameterArray['values'][] = ["outcomesReleasePostalcode"=>$this->postalcode];
        if ($this->byId !== null) $parameterArray['values'][] = ["outcomesReleaseByID"=>$this->byId];
    }
}