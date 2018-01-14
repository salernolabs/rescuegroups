<?php
/**
 * MicrochipVendors GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipVendors;

class GetList implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface
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
        return 'microchipVendors';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'list';
    }

}