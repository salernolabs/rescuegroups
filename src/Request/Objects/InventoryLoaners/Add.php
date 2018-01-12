<?php
/**
 * InventoryLoaners Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\InventoryLoaners;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "inventoryLoanerContactID" => 1,
        "inventoryLoanerItemID" => 1,
        "inventoryLoanerLoanDate" => 1,
        "inventoryLoanerLoanConditionID" => 0,
        "inventoryLoanerDueDate" => 0,
        "inventoryLoanerReturnDate" => 0,
        "inventoryLoanerReturnConditionID" => 0,
        "inventoryLoanerNotes" => 0,
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
        return 'inventoryLoaners';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
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