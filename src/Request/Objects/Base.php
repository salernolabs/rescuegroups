<?php
/**
 * Base request object, all classes extend from this one
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Request\Objects;

class Base implements
    \RescueGroups\Request\RequestInterface,
    \RescueGroups\Request\ObjectActionInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = '';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = '';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return static::QUERY_OBJECT_TYPE;
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return static::QUERY_OBJECT_ACTION;
    }

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return static::QUERY_LOGIN_REQUIRED;
    }
}