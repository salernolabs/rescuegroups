<?php
/**
 * WebPages GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebPages;

class GetList extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'webpages';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'list';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;
}