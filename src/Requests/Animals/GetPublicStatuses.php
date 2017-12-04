<?php
/**
 * Animals GetPublicStatuses Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Animals;

class GetPublicStatuses implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface
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
        return 'getPublicStatuses';
    }


}