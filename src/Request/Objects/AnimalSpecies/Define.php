<?php
/**
 * AnimalSpecies Define Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalSpecies;

class Define extends \RescueGroups\Request\Objects\Base
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalSpecies';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'define';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;
}