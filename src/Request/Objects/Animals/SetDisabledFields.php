<?php
/**
 * Animals SetDisabledFields Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetDisabledFields extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'setDisabledFields';

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

        if ($this->fieldlist !== null) $parameterArray['values'][] = ["fieldlist"=>$this->fieldlist];
    }
}