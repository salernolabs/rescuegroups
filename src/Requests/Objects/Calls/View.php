<?php
/**
 * Calls View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Calls;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $callID = null;


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
        return 'calls';
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
     * @param integer $callID
     * @return $this
     */
    public function setCallID($callID)
    {
        $this->callID = $callID;

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
        if ($this->callID !== null) $parameterArray['callID'] = $this->callID;

    }
}