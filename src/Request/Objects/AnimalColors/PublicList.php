<?php
/**
 * AnimalColors PublicList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalColors;

class PublicList extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalColors';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicList';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;



    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}