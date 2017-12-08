<?php
/**
 * IntakesTransfers View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\IntakesTransfers;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Owner Surrender
     * @var integer
     */
    private $intakesTransferID = null;


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
     * Set Owner Surrender
     *
     * @param integer $intakesTransferID
     * @return $this
     */
    public function setIntakesTransferID($intakesTransferID)
    {
        $this->intakesTransferID = $intakesTransferID;

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
        if ($this->intakesTransferID !== null) $parameterArray['intakesTransferID'] = $this->intakesTransferID;

    }
}