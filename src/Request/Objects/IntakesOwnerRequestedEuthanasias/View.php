<?php
/**
 * IntakesOwnerRequestedEuthanasias View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Owner requestedeuthanasia
     *
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaID = null;


    /**
     * Set Owner requestedeuthanasia
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaID($value)
    {
        $this->intakesOwnerrequestedeuthanasiaID = $value;

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
        return 'intakesOwnerrequestedeuthanasias';
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

        if ($this->intakesOwnerrequestedeuthanasiaID !== null) $parameterArray['values'][] = ["intakesOwnerrequestedeuthanasiaID"=>$this->intakesOwnerrequestedeuthanasiaID];
    }
}