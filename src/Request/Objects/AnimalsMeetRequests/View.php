<?php
/**
 * AnimalsMeetRequests View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsMeetRequests;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Meet Request ID
     *
     * @var integer
     */
    private $meetrequestID = null;


    /**
     * Set Meet Request ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMeetrequestID($value)
    {
        $this->meetrequestID = $value;

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
        return 'animalsMeetrequests';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->meetrequestID !== null) $parameterArray['values'][] = ["meetrequestID"=>$this->meetrequestID];
    }
}