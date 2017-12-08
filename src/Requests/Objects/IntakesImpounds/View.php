<?php
/**
 * IntakesImpounds View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesImpounds;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakesImpoundID !== null) $parameterArray['intakesImpoundID'] = $this->intakesImpoundID;

    }
}