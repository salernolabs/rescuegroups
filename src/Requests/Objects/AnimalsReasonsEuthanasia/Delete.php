<?php
/**
 * AnimalsReasonsEuthanasia Delete Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Requests\Objects\AnimalsReasonsEuthanasia;

class Delete implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Reason ID
     * @var integer
     */
    private $reasonID = null;


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
        return 'animalsReasonsEuthanasia';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'delete';
    }

    /**
     * Set Reason ID
     *
     * @param integer $reasonID
     * @return $this
     */
    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;

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
        if ($this->reasonID !== null) $parameterArray['reasonID'] = $this->reasonID;

    }
}