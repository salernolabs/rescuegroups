<?php
/**
 * OutcomesReturntoowner Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\OutcomesReturntoowner;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $outcomesReturntoownerID = null;

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
     * Animal
     * @var integer
     */
    private $animalID = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Condition
     * @var string
     */
    private $animalConditionName = null;

    /**
     * Owner
     * @var string
     */
    private $returntoownerName = null;


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
        return 'search';
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
     * Set Animal
     *
     * @param integer $animalID
     * @return $this
     */
    public function setAnimalID($animalID)
    {
        $this->animalID = $animalID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $animalConditionName
     * @return $this
     */
    public function setAnimalConditionName($animalConditionName)
    {
        $this->animalConditionName = $animalConditionName;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param string $returntoownerName
     * @return $this
     */
    public function setReturntoownerName($returntoownerName)
    {
        $this->returntoownerName = $returntoownerName;

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
        if ($this->outcomesReturntoownerIntakeID !== null) $parameterArray['outcomesReturntoownerIntakeID'] = $this->outcomesReturntoownerIntakeID;
        if ($this->outcomesReturntoownerAnimalConditionID !== null) $parameterArray['outcomesReturntoownerAnimalConditionID'] = $this->outcomesReturntoownerAnimalConditionID;
        if ($this->outcomesReturntoownerDate !== null) $parameterArray['outcomesReturntoownerDate'] = $this->outcomesReturntoownerDate;
        if ($this->outcomesReturntoownerNotes !== null) $parameterArray['outcomesReturntoownerNotes'] = $this->outcomesReturntoownerNotes;
        if ($this->outcomesReturntoownerOwnerID !== null) $parameterArray['outcomesReturntoownerOwnerID'] = $this->outcomesReturntoownerOwnerID;
        if ($this->animalID !== null) $parameterArray['animalID'] = $this->animalID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalConditionName !== null) $parameterArray['animalConditionName'] = $this->animalConditionName;
        if ($this->returntoownerName !== null) $parameterArray['returntoownerName'] = $this->returntoownerName;

        $this->addSearchParameters($parameterArray);

    }
}