<?php
/**
 * Colonies Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Colonies;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $colonyName = null;

    /**
     * Location
     *
     * @var integer
     */
    private $colonyLocationID = null;

    /**
     * Number of animals
     *
     * @var string
     */
    private $colonyTotalAnimals = null;

    /**
     * Registered
     *
     * @var \DateTime
     */
    private $colonyRegisteredDate = null;

    /**
     * Specific location
     *
     * @var string
     */
    private $colonySpecificLocation = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setColonyName($value)
    {
        $this->colonyName = $value;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $value
     * @return $this
     */
    public function setColonyLocationID($value)
    {
        $this->colonyLocationID = $value;

        return $this;
    }

    /**
     * Set Number of animals
     *
     * @param string $value
     * @return $this
     */
    public function setColonyTotalAnimals($value)
    {
        $this->colonyTotalAnimals = $value;

        return $this;
    }

    /**
     * Set Registered
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setColonyRegisteredDate($value)
    {
        $this->colonyRegisteredDate = $value;

        return $this;
    }

    /**
     * Set Specific location
     *
     * @param string $value
     * @return $this
     */
    public function setColonySpecificLocation($value)
    {
        $this->colonySpecificLocation = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->colonyName !== null) $parameterArray['values'][] = ["colonyName"=>$this->colonyName];
        if ($this->colonyLocationID !== null) $parameterArray['values'][] = ["colonyLocationID"=>$this->colonyLocationID];
        if ($this->colonyTotalAnimals !== null) $parameterArray['values'][] = ["colonyTotalAnimals"=>$this->colonyTotalAnimals];
        if ($this->colonyRegisteredDate !== null) $parameterArray['values'][] = ["colonyRegisteredDate"=>$this->colonyRegisteredDate];
        if ($this->colonySpecificLocation !== null) $parameterArray['values'][] = ["colonySpecificLocation"=>$this->colonySpecificLocation];
    }
}