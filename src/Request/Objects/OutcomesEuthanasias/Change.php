<?php
/**
 * OutcomesEuthanasias Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesEuthanasias;

class Change extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesEuthanasias';

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
    private $outcomesEuthanasiaAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $outcomesEuthanasiaDate = null;

    /**
     * Notes
     *
     * @var string
     */
    private $outcomesEuthanasiaNotes = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    private $outcomesEuthanasiaReasonID = null;


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
    public function setOutcomesEuthanasiaAnimalConditionID($value)
    {
        $this->outcomesEuthanasiaAnimalConditionID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setOutcomesEuthanasiaDate($value)
    {
        $this->outcomesEuthanasiaDate = $value;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $value
     * @return $this
     */
    public function setOutcomesEuthanasiaNotes($value)
    {
        $this->outcomesEuthanasiaNotes = $value;

        return $this;
    }

    /**
     * Set Euthanasia Reason
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesEuthanasiaReasonID($value)
    {
        $this->outcomesEuthanasiaReasonID = $value;

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
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaAnimalConditionID"=>$this->outcomesEuthanasiaAnimalConditionID];
        if ($this->outcomesEuthanasiaDate !== null) $parameterArray['values'][] = ["outcomesEuthanasiaDate"=>$this->outcomesEuthanasiaDate];
        if ($this->outcomesEuthanasiaNotes !== null) $parameterArray['values'][] = ["outcomesEuthanasiaNotes"=>$this->outcomesEuthanasiaNotes];
        if ($this->outcomesEuthanasiaReasonID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaReasonID"=>$this->outcomesEuthanasiaReasonID];
    }
}