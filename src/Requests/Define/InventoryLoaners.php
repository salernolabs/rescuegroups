<?php
/**
 * InventoryLoaners Define Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:31
 */
namespace RescueGroups\Requests\Define;

class InventoryLoaners implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface
{
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
        return 'define';
    }
}