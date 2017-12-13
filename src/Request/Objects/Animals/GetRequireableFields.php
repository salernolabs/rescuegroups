<?php
/**
 * Animals GetRequireableFields Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class GetRequireableFields implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface
{

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
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'getRequireableFields';
    }


}