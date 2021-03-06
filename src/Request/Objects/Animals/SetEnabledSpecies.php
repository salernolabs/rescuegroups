<?php
/**
 * Animals SetEnabledSpecies Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetEnabledSpecies extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'setEnabledSpecies';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Field list
     *
     * @var string
     */
    private $fieldlist = null;


    /**
     * Set Field list
     *
     * @param string $value
     * @return $this
     */
    public function setFieldlist($value)
    {
        $this->fieldlist = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        $value = [];
        if ($this->fieldlist !== null) $value["fieldlist"] = $this->fieldlist;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}