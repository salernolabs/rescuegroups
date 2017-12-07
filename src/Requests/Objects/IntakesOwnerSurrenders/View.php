<?php
/**
 * IntakesOwnerSurrenders View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Requests\Objects\IntakesOwnerSurrenders;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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