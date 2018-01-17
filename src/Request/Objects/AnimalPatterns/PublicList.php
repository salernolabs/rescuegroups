<?php
/**
 * AnimalPatterns PublicList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalPatterns;

class PublicList extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalPatterns';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicList';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;
}