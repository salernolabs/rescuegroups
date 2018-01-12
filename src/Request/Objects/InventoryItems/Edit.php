<?php
/**
 * InventoryItems Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryItems;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "inventoryitemID" => 1,
        "inventoryitemName" => 0,
        "inventoryitemItemID" => 0,
        "inventoryitemDescription" => 0,
        "inventoryitemReceivedDate" => 0,
        "inventoryitemSource" => 0,
        "inventoryitemCost" => 0,
        "inventoryitemConditionID" => 0,
        "inventoryitemCategory" => 0,
        "inventoryitemDisposedDate" => 0,
        "inventoryitemDisposedDestination" => 0,
        "inventoryitemStorageLocation" => 0,
    ];


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
        return 'inventoryitems';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

    }

}