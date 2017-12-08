<?php
/**
 * Colonies Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Colonies;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Name
     * @var string
     */
    private $colonyName = null;

    /**
     * Location
     * @var integer
     */
    private $colonyLocationID = null;

    /**
     * Number of animals
     * @var int
     */
    private $colonyTotalAnimals = null;

    /**
     * Registered
     * @var \DateTime
     */
    private $colonyRegisteredDate = null;

    /**
     * Specific location
     * @var string
     */
    private $colonySpecificLocation = null;


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
        return 'colonies';
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
     * Set Name
     *
     * @param string $colonyName
     * @return $this
     */
    public function setColonyName($colonyName)
    {
        $this->colonyName = $colonyName;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $colonyLocationID
     * @return $this
     */
    public function setColonyLocationID($colonyLocationID)
    {
        $this->colonyLocationID = $colonyLocationID;

        return $this;
    }

    /**
     * Set Number of animals
     *
     * @param int $colonyTotalAnimals
     * @return $this
     */
    public function setColonyTotalAnimals($colonyTotalAnimals)
    {
        $this->colonyTotalAnimals = $colonyTotalAnimals;

        return $this;
    }

    /**
     * Set Registered
     *
     * @param \DateTime $colonyRegisteredDate
     * @return $this
     */
    public function setColonyRegisteredDate($colonyRegisteredDate)
    {
        $this->colonyRegisteredDate = $colonyRegisteredDate;

        return $this;
    }

    /**
     * Set Specific location
     *
     * @param string $colonySpecificLocation
     * @return $this
     */
    public function setColonySpecificLocation($colonySpecificLocation)
    {
        $this->colonySpecificLocation = $colonySpecificLocation;

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
        if ($this->colonyName !== null) $parameterArray['colonyName'] = $this->colonyName;
        if ($this->colonyLocationID !== null) $parameterArray['colonyLocationID'] = $this->colonyLocationID;
        if ($this->colonyTotalAnimals !== null) $parameterArray['colonyTotalAnimals'] = $this->colonyTotalAnimals;
        if ($this->colonyRegisteredDate !== null) $parameterArray['colonyRegisteredDate'] = $this->colonyRegisteredDate;
        if ($this->colonySpecificLocation !== null) $parameterArray['colonySpecificLocation'] = $this->colonySpecificLocation;

    }
}