<?php
/**
 * Object Action Interface
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Requests;

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