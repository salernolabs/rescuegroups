<?php
/**
 * Locations Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Locations;

class Delete extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'locations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $id = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

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
        if ($this->id !== null) $value["locationID"] = $this->id;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}