<?php
/**
 * IntakesTransfers View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesTransfers;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Owner Surrender
     *
     * @var integer
     */
    private $intakesTransferID = null;


    /**
     * Set Owner Surrender
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesTransferID($value)
    {
        $this->intakesTransferID = $value;

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
        return 'intakesTransfers';
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

        if ($this->intakesTransferID !== null) $parameterArray['values'][] = ["intakesTransferID"=>$this->intakesTransferID];
    }
}