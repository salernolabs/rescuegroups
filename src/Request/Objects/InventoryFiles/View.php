<?php
/**
 * InventoryFiles View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryFiles;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'inventoryfiles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * File
     *
     * @var integer
     */
    private $inventoryfileID = null;


    /**
     * Set File
     *
     * @param integer $value
     * @return $this
     */
    public function setInventoryfileID($value)
    {
        $this->inventoryfileID = $value;

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

        if ($this->inventoryfileID !== null) $parameterArray['values'][] = ["inventoryfileID"=>$this->inventoryfileID];
    }
}