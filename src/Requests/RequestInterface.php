<?php
/**
 * Request Interface
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Requests;

interface RequestInterface
{
    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType();

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction();
}