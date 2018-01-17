<?php
/**
 * InventoryLoaners Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Delete extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'inventoryLoaners';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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