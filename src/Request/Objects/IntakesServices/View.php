<?php
/**
 * IntakesServices View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServices;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Service
     *
     * @var integer
     */
    private $intakesServiceID = null;


    /**
     * Set Service
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesServiceID($value)
    {
        $this->intakesServiceID = $value;

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
        return 'intakesServices';
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

        if ($this->intakesServiceID !== null) $parameterArray['values'][] = ["intakesServiceID"=>$this->intakesServiceID];
    }
}