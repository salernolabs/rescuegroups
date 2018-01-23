<?php
/**
 * AnimalsExports GetSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class GetSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsExports';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'getSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;



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