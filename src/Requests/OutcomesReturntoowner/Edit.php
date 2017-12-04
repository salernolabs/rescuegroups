<?php
/**
 * OutcomesReturntoowner Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\OutcomesReturntoowner;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $outcomesReturntoownerID = null;

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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $outcomesReturntoownerID
     * @return $this
     */
    public function setOutcomesReturntoownerID($outcomesReturntoownerID)
    {
        $this->outcomesReturntoownerID = $outcomesReturntoownerID;

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
        if ($this->outcomesReturntoownerID !== null) $parameterArray['outcomesReturntoownerID'] = $this->outcomesReturntoownerID;
        if ($this->outcomesReturntoownerAnimalConditionID !== null) $parameterArray['outcomesReturntoownerAnimalConditionID'] = $this->outcomesReturntoownerAnimalConditionID;
        if ($this->outcomesReturntoownerDate !== null) $parameterArray['outcomesReturntoownerDate'] = $this->outcomesReturntoownerDate;
        if ($this->outcomesReturntoownerNotes !== null) $parameterArray['outcomesReturntoownerNotes'] = $this->outcomesReturntoownerNotes;
        if ($this->outcomesReturntoownerOwnerID !== null) $parameterArray['outcomesReturntoownerOwnerID'] = $this->outcomesReturntoownerOwnerID;

    }
}