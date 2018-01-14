<?php
/**
 * InventoryLoaners Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Delete implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     *
     * @var integer
     */
    private $inventoryLoanerID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryLoanerID($value)
    {
        $this->inventoryLoanerID = $value;

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
        return 'inventoryLoaners';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'delete';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->inventoryLoanerID !== null) $parameterArray['values'][] = ["inventoryLoanerID"=>$this->inventoryLoanerID];
    }
}