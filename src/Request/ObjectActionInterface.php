<?php
/**
 * Object Action Interface
 *
 * @package RescueGroups
 * @subpackage Request
 * @author Eric
 */
namespace RescueGroups\Request;

interface ObjectActionInterface
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