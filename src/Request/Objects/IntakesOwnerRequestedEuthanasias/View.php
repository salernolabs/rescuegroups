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
     * @var integer
     */
    private $intakesOwnerrequestedeuthanasiaID = null;


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
     * Set Owner requestedeuthanasia
     *
     * @param integer $intakesOwnerrequestedeuthanasiaID
     * @return $this
     */
    public function setIntakesOwnerrequestedeuthanasiaID($intakesOwnerrequestedeuthanasiaID)
    {
        $this->intakesOwnerrequestedeuthanasiaID = $intakesOwnerrequestedeuthanasiaID;

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
        if ($this->intakesOwnerrequestedeuthanasiaID !== null) $parameterArray['intakesOwnerrequestedeuthanasiaID'] = $this->intakesOwnerrequestedeuthanasiaID;

    }
}