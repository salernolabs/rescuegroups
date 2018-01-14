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
     *
     * @var integer
     */
    private $intakesImpoundID = null;


    /**
     * Set Impound
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesImpoundID($value)
    {
        $this->intakesImpoundID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakesImpoundID !== null) $parameterArray['values'][] = ["intakesImpoundID"=>$this->intakesImpoundID];
    }
}