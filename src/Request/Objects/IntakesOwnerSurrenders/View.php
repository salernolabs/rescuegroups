<?php
/**
 * IntakesOwnerSurrenders View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Owner Surrender
     * @var integer
     */
    private $intakesOwnersurrenderID = null;


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
        return 'intakesOwnersurrenders';
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
     * Set Owner Surrender
     *
     * @param integer $intakesOwnersurrenderID
     * @return $this
     */
    public function setIntakesOwnersurrenderID($intakesOwnersurrenderID)
    {
        $this->intakesOwnersurrenderID = $intakesOwnersurrenderID;

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
        if ($this->intakesOwnersurrenderID !== null) $parameterArray['intakesOwnersurrenderID'] = $this->intakesOwnersurrenderID;

    }
}