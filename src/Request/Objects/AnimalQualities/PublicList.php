<?php
/**
 * AnimalQualities PublicList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalQualities;

class PublicList extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalQualities';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicList';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;
}