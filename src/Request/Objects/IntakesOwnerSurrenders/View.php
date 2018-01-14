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
     *
     * @var integer
     */
    private $intakesOwnersurrenderID = null;


    /**
     * Set Owner Surrender
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderID($value)
    {
        $this->intakesOwnersurrenderID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakesOwnersurrenderID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderID"=>$this->intakesOwnersurrenderID];
    }
}