<?php
/**
 * IntakesOwnerSurrenders Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesOwnersurrenders';

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
    private $intakesOwnersurrenderAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    private $intakesOwnersurrenderAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $intakesOwnersurrenderDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $intakesOwnersurrenderNotes = null;

    /**
     * Surrendered By
     *
     * @var integer
     */
    private $intakesOwnersurrenderOwnerID = null;

    /**
     * Surrender Reason
     *
     * @var integer
     */
    private $intakesOwnersurrenderReasonID = null;


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
    public function setIntakesOwnersurrenderAnimalID($value)
    {
        $this->intakesOwnersurrenderAnimalID = $value;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderAnimalConditionID($value)
    {
        $this->intakesOwnersurrenderAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setIntakesOwnersurrenderDate($value)
    {
        $this->intakesOwnersurrenderDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setIntakesOwnersurrenderNotes($value)
    {
        $this->intakesOwnersurrenderNotes = $value;

        return $this;
    }

    /**
     * Set Surrendered By
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderOwnerID($value)
    {
        $this->intakesOwnersurrenderOwnerID = $value;

        return $this;
    }

    /**
     * Set Surrender Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderReasonID($value)
    {
        $this->intakesOwnersurrenderReasonID = $value;

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
        if ($this->intakesOwnersurrenderAnimalID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderAnimalID"=>$this->intakesOwnersurrenderAnimalID];
        if ($this->intakesOwnersurrenderAnimalConditionID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderAnimalConditionID"=>$this->intakesOwnersurrenderAnimalConditionID];
        if ($this->intakesOwnersurrenderDate !== null) $parameterArray['values'][] = ["intakesOwnersurrenderDate"=>$this->intakesOwnersurrenderDate];
        if ($this->intakesOwnersurrenderNotes !== null) $parameterArray['values'][] = ["intakesOwnersurrenderNotes"=>$this->intakesOwnersurrenderNotes];
        if ($this->intakesOwnersurrenderOwnerID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderOwnerID"=>$this->intakesOwnersurrenderOwnerID];
        if ($this->intakesOwnersurrenderReasonID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderReasonID"=>$this->intakesOwnersurrenderReasonID];
    }
}