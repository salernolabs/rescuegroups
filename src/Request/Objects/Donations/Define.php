<?php
/**
 * Donations Define Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Define extends \RescueGroups\Request\Objects\Base
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'donations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'define';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;
}