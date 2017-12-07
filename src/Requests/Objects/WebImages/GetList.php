<?php
/**
 * WebImages GetList Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebImages;

class GetList implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface
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
        return 'webimages';
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