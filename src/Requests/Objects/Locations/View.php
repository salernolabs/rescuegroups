<?php
/**
 * Locations View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Requests\Objects\Locations;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $locationID = null;


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
        return 'locations';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'view';
    }

    /**
     * Set ID
     *
     * @param integer $locationID
     * @return $this
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;

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
        if ($this->locationID !== null) $parameterArray['locationID'] = $this->locationID;

    }
}