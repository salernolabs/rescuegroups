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
    private $outcomeID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $outcomesReleaseAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $outcomesReleaseDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $outcomesReleaseNotes = null;

    /**
     * Location
     *
     * @var string
     */
    private $outcomesReleaseLocation = null;

    /**
     * Street address
     *
     * @var string
     */
    private $outcomesReleaseAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $outcomesReleaseCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $tate = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $outcomesReleasePostalcode = null;

    /**
     * Released By
     *
     * @var integer
     */
    private $outcomesReleaseByID = null;


    /**
     * Set Outcome
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomeID($value)
    {
        $this->outcomeID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesReleaseAnimalConditionID($value)
    {
        $this->outcomesReleaseAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setOutcomesReleaseDate($value)
    {
        $this->outcomesReleaseDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesReleaseNotes($value)
    {
        $this->outcomesReleaseNotes = $value;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesReleaseLocation($value)
    {
        $this->outcomesReleaseLocation = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesReleaseAddress($value)
    {
        $this->outcomesReleaseAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesReleaseCity($value)
    {
        $this->outcomesReleaseCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setTate($value)
    {
        $this->tate = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesReleasePostalcode($value)
    {
        $this->outcomesReleasePostalcode = $value;

        return $this;
    }

    /**
     * Set Released By
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesReleaseByID($value)
    {
        $this->outcomesReleaseByID = $value;

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

        if ($this->outcomeID !== null) $parameterArray['values'][] = ["outcomeID"=>$this->outcomeID];
        if ($this->outcomesReleaseAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesReleaseAnimalConditionID"=>$this->outcomesReleaseAnimalConditionID];
        if ($this->outcomesReleaseDate !== null) $parameterArray['values'][] = ["outcomesReleaseDate"=>$this->outcomesReleaseDate];
        if ($this->outcomesReleaseNotes !== null) $parameterArray['values'][] = ["outcomesReleaseNotes"=>$this->outcomesReleaseNotes];
        if ($this->outcomesReleaseLocation !== null) $parameterArray['values'][] = ["outcomesReleaseLocation"=>$this->outcomesReleaseLocation];
        if ($this->outcomesReleaseAddress !== null) $parameterArray['values'][] = ["outcomesReleaseAddress"=>$this->outcomesReleaseAddress];
        if ($this->outcomesReleaseCity !== null) $parameterArray['values'][] = ["outcomesReleaseCity"=>$this->outcomesReleaseCity];
        if ($this->tate !== null) $parameterArray['values'][] = ["outcomesReleaseState"=>$this->tate];
        if ($this->outcomesReleasePostalcode !== null) $parameterArray['values'][] = ["outcomesReleasePostalcode"=>$this->outcomesReleasePostalcode];
        if ($this->outcomesReleaseByID !== null) $parameterArray['values'][] = ["outcomesReleaseByID"=>$this->outcomesReleaseByID];
    }
}