<?php
/**
 * OutcomesReturntoowner Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\OutcomesReturntoowner;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Outcome Returntoowner Intake
     * @var integer
     */
    private $outcomesReturntoownerIntakeID = null;

    /**
     * Condition
     * @var integer
     */
    private $outcomesReturntoownerAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $outcomesReturntoownerDate = null;

    /**
     * Notes
     * @var string
     */
    private $outcomesReturntoownerNotes = null;

    /**
     * Return To
     * @var integer
     */
    private $outcomesReturntoownerOwnerID = null;


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
        return 'outcomesReturntoowner';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Set Outcome Returntoowner Intake
     *
     * @param integer $outcomesReturntoownerIntakeID
     * @return $this
     */
    public function setOutcomesReturntoownerIntakeID($outcomesReturntoownerIntakeID)
    {
        $this->outcomesReturntoownerIntakeID = $outcomesReturntoownerIntakeID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $outcomesReturntoownerAnimalConditionID
     * @return $this
     */
    public function setOutcomesReturntoownerAnimalConditionID($outcomesReturntoownerAnimalConditionID)
    {
        $this->outcomesReturntoownerAnimalConditionID = $outcomesReturntoownerAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $outcomesReturntoownerDate
     * @return $this
     */
    public function setOutcomesReturntoownerDate($outcomesReturntoownerDate)
    {
        $this->outcomesReturntoownerDate = $outcomesReturntoownerDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $outcomesReturntoownerNotes
     * @return $this
     */
    public function setOutcomesReturntoownerNotes($outcomesReturntoownerNotes)
    {
        $this->outcomesReturntoownerNotes = $outcomesReturntoownerNotes;

        return $this;
    }

    /**
     * Set Return To
     *
     * @param integer $outcomesReturntoownerOwnerID
     * @return $this
     */
    public function setOutcomesReturntoownerOwnerID($outcomesReturntoownerOwnerID)
    {
        $this->outcomesReturntoownerOwnerID = $outcomesReturntoownerOwnerID;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->outcomesReturntoownerIntakeID !== null) $parameterArray['outcomesReturntoownerIntakeID'] = $this->outcomesReturntoownerIntakeID;
        if ($this->outcomesReturntoownerAnimalConditionID !== null) $parameterArray['outcomesReturntoownerAnimalConditionID'] = $this->outcomesReturntoownerAnimalConditionID;
        if ($this->outcomesReturntoownerDate !== null) $parameterArray['outcomesReturntoownerDate'] = $this->outcomesReturntoownerDate;
        if ($this->outcomesReturntoownerNotes !== null) $parameterArray['outcomesReturntoownerNotes'] = $this->outcomesReturntoownerNotes;
        if ($this->outcomesReturntoownerOwnerID !== null) $parameterArray['outcomesReturntoownerOwnerID'] = $this->outcomesReturntoownerOwnerID;

    }
}