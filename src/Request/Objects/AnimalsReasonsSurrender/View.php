<?php
/**
 * AnimalsReasonsSurrender View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsReasonsSurrender;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Reason ID
     *
     * @var integer
     */
    private $reasonID = null;


    /**
     * Set Reason ID
     *
     * @param integer $value
     * @return $this
     */
    public function setReasonID($value)
    {
        $this->reasonID = $value;

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
        return 'animalsReasonsSurrender';
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

        if ($this->reasonID !== null) $parameterArray['values'][] = ["reasonID"=>$this->reasonID];
    }
}