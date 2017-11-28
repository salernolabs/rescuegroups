<?php
/**
 * Animals Define Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Requests\Define;

class Animals implements \RescueGroups\Requests\RequestInterface
{
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
        return 'define';
    }
}