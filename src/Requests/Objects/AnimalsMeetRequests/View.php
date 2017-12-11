<?php
/**
 * AnimalsMeetRequests View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalsMeetRequests;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Meet Request ID
     * @var integer
     */
    private $meetrequestID = null;


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
     * Set Meet Request ID
     *
     * @param integer $meetrequestID
     * @return $this
     */
    public function setMeetrequestID($meetrequestID)
    {
        $this->meetrequestID = $meetrequestID;

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
        if ($this->meetrequestID !== null) $parameterArray['meetrequestID'] = $this->meetrequestID;

    }
}