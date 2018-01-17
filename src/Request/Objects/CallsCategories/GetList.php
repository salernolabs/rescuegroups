<?php
/**
 * CallsCategories GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsCategories;

class GetList extends \RescueGroups\Request\Objects\Base
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsCategories';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'list';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;
}