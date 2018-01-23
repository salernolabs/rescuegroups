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
    private $intakeID = null;

    /**
     * Animal
     *
     * @var integer
     */
    private $intakesImpoundAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesImpoundAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesImpoundDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesImpoundNotes = null;

    /**
     * Impound Location
     *
     * @var string
     */
    private $intakesImpoundLocation = null;

    /**
     * Impound Street address
     *
     * @var string
     */
    private $intakesImpoundAddress = null;

    /**
     * Impound City
     *
     * @var string
     */
    private $intakesImpoundCity = null;

    /**
     * Impound State/Province
     *
     * @var string
     */
    private $tate = null;

    /**
     * Impound Postal Code
     *
     * @var string
     */
    private $intakesImpoundPostalcode = null;

    /**
     * Impound From
     *
     * @var integer
     */
    private $intakesImpoundFromID = null;

    /**
     * Impound Performed By
     *
     * @var integer
     */
    private $taffID = null;

    /**
     * Reason
     *
     * @var integer
     */
    private $intakesImpoundReasonID = null;


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
    public function setIntakesImpoundAnimalID($value)
    {
        $this->intakesImpoundAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesImpoundAnimalConditionID($value)
    {
        $this->intakesImpoundAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesImpoundDate($value)
    {
        $this->intakesImpoundDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesImpoundNotes($value)
    {
        $this->intakesImpoundNotes = $value;

        return $this;
    }

    /**
     * Set Impound Location
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesImpoundLocation($value)
    {
        $this->intakesImpoundLocation = $value;

        return $this;
    }

    /**
     * Set Impound Street address
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesImpoundAddress($value)
    {
        $this->intakesImpoundAddress = $value;

        return $this;
    }

    /**
     * Set Impound City
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesImpoundCity($value)
    {
        $this->intakesImpoundCity = $value;

        return $this;
    }

    /**
     * Set Impound State/Province
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
     * Set Impound Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesImpoundPostalcode($value)
    {
        $this->intakesImpoundPostalcode = $value;

        return $this;
    }

    /**
     * Set Impound From
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesImpoundFromID($value)
    {
        $this->intakesImpoundFromID = $value;

        return $this;
    }

    /**
     * Set Impound Performed By
     *
     * @param integer $value
     * @return $this
     */
    public function setTaffID($value)
    {
        $this->taffID = $value;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesImpoundReasonID($value)
    {
        $this->intakesImpoundReasonID = $value;

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
        if ($this->intakesImpoundAnimalID !== null) $parameterArray['values'][] = ["intakesImpoundAnimalID"=>$this->intakesImpoundAnimalID];
        if ($this->intakesImpoundAnimalConditionID !== null) $parameterArray['values'][] = ["intakesImpoundAnimalConditionID"=>$this->intakesImpoundAnimalConditionID];
        if ($this->intakesImpoundDate !== null) $parameterArray['values'][] = ["intakesImpoundDate"=>$this->intakesImpoundDate];
        if ($this->intakesImpoundNotes !== null) $parameterArray['values'][] = ["intakesImpoundNotes"=>$this->intakesImpoundNotes];
        if ($this->intakesImpoundLocation !== null) $parameterArray['values'][] = ["intakesImpoundLocation"=>$this->intakesImpoundLocation];
        if ($this->intakesImpoundAddress !== null) $parameterArray['values'][] = ["intakesImpoundAddress"=>$this->intakesImpoundAddress];
        if ($this->intakesImpoundCity !== null) $parameterArray['values'][] = ["intakesImpoundCity"=>$this->intakesImpoundCity];
        if ($this->tate !== null) $parameterArray['values'][] = ["intakesImpoundState"=>$this->tate];
        if ($this->intakesImpoundPostalcode !== null) $parameterArray['values'][] = ["intakesImpoundPostalcode"=>$this->intakesImpoundPostalcode];
        if ($this->intakesImpoundFromID !== null) $parameterArray['values'][] = ["intakesImpoundFromID"=>$this->intakesImpoundFromID];
        if ($this->taffID !== null) $parameterArray['values'][] = ["intakesImpoundStaffID"=>$this->taffID];
        if ($this->intakesImpoundReasonID !== null) $parameterArray['values'][] = ["intakesImpoundReasonID"=>$this->intakesImpoundReasonID];
    }
}