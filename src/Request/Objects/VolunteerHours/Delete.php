<?php
/**
 * VolunteerHours Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteerHours;

class Delete implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     *
     * @var integer
     */
    private $id = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

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
        return 'volunteerHours';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->id !== null) $parameterArray['values'][] = ["volunteerHoursID"=>$this->id];
    }
}