<?php
/**
 * IntakesImpounds View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Impound
     * @var integer
     */
    private $intakesImpoundID = null;


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
        return 'intakesImpounds';
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
     * Set Impound
     *
     * @param integer $intakesImpoundID
     * @return $this
     */
    public function setIntakesImpoundID($intakesImpoundID)
    {
        $this->intakesImpoundID = $intakesImpoundID;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakesImpoundID !== null) $parameterArray['intakesImpoundID'] = $this->intakesImpoundID;

    }
}