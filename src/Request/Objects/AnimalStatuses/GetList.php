<?php
/**
 * AnimalStatuses GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalStatuses;

class GetList extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalStatuses';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'list';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;
}