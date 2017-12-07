<?php
/**
 * IntakesOwnerRequestEdeuthanasias View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerRequestEdeuthanasias;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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