<?php
/**
 * IntakesServices Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesServices;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Service
     * @var integer
     */
    private $intakesServiceID = null;

    /**
     * Animal
     * @var integer
     */
    private $intakesServiceAnimalID = null;

    /**
     * Condition
     * @var integer
     */
    private $intakesServiceAnimalConditionID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $intakesServiceDate = null;

    /**
     * Notes
     * @var string
     */
    private $intakesServiceNotes = null;

    /**
     * Owner
     * @var integer
     */
    private $intakesServiceOwnerID = null;

    /**
     * Service
     * @var integer
     */
    private $intakesServiceServicetypeID = null;


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
        return 'intakesServices';
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
     * Set Service
     *
     * @param integer $intakesServiceID
     * @return $this
     */
    public function setIntakesServiceID($intakesServiceID)
    {
        $this->intakesServiceID = $intakesServiceID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $intakesServiceAnimalID
     * @return $this
     */
    public function setIntakesServiceAnimalID($intakesServiceAnimalID)
    {
        $this->intakesServiceAnimalID = $intakesServiceAnimalID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $intakesServiceAnimalConditionID
     * @return $this
     */
    public function setIntakesServiceAnimalConditionID($intakesServiceAnimalConditionID)
    {
        $this->intakesServiceAnimalConditionID = $intakesServiceAnimalConditionID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $intakesServiceDate
     * @return $this
     */
    public function setIntakesServiceDate($intakesServiceDate)
    {
        $this->intakesServiceDate = $intakesServiceDate;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $intakesServiceNotes
     * @return $this
     */
    public function setIntakesServiceNotes($intakesServiceNotes)
    {
        $this->intakesServiceNotes = $intakesServiceNotes;

        return $this;
    }

    /**
     * Set Owner
     *
     * @param integer $intakesServiceOwnerID
     * @return $this
     */
    public function setIntakesServiceOwnerID($intakesServiceOwnerID)
    {
        $this->intakesServiceOwnerID = $intakesServiceOwnerID;

        return $this;
    }

    /**
     * Set Service
     *
     * @param integer $intakesServiceServicetypeID
     * @return $this
     */
    public function setIntakesServiceServicetypeID($intakesServiceServicetypeID)
    {
        $this->intakesServiceServicetypeID = $intakesServiceServicetypeID;

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
        if ($this->intakesServiceID !== null) $parameterArray['intakesServiceID'] = $this->intakesServiceID;
        if ($this->intakesServiceAnimalID !== null) $parameterArray['intakesServiceAnimalID'] = $this->intakesServiceAnimalID;
        if ($this->intakesServiceAnimalConditionID !== null) $parameterArray['intakesServiceAnimalConditionID'] = $this->intakesServiceAnimalConditionID;
        if ($this->intakesServiceDate !== null) $parameterArray['intakesServiceDate'] = $this->intakesServiceDate;
        if ($this->intakesServiceNotes !== null) $parameterArray['intakesServiceNotes'] = $this->intakesServiceNotes;
        if ($this->intakesServiceOwnerID !== null) $parameterArray['intakesServiceOwnerID'] = $this->intakesServiceOwnerID;
        if ($this->intakesServiceServicetypeID !== null) $parameterArray['intakesServiceServicetypeID'] = $this->intakesServiceServicetypeID;

    }
}