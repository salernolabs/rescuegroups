<?php
/**
 * %CLASSNAME% Define Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Define;

class %CLASSNAME% implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface
{
    /**
     * @return bool
     */
    public function loginRequired()
    {
        return %NEEDLOGIN%;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return '%TYPENAME%';
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