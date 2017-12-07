<?php
/**
 * IntakesServiceTypes Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:23
 */
namespace RescueGroups\Requests\Objects\IntakesServiceTypes;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Service
     * @var integer
     */
    private $serviceID = null;

    /**
     * Service
     * @var string
     */
    private $serviceName = null;


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
        return 'intakesServicetypes';
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
     * @param integer $serviceID
     * @return $this
     */
    public function setServiceID($serviceID)
    {
        $this->serviceID = $serviceID;

        return $this;
    }

    /**
     * Set Service
     *
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

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
        if ($this->serviceID !== null) $parameterArray['serviceID'] = $this->serviceID;
        if ($this->serviceName !== null) $parameterArray['serviceName'] = $this->serviceName;

    }
}