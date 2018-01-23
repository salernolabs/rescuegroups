<?php
/**
 * AnimalsExports UpdateExports Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateExports extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsExports';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateExports';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Export ID
     *
     * @var integer
     */
    private $id = null;

    /**
     * Export enabled
     *
     * @var string
     */
    private $enabled = null;


    /**
     * Set Export ID
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
     * Set Export enabled
     *
     * @param string $value
     * @return $this
     */
    public function setEnabled($value)
    {
        $this->enabled = $value;

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

        if ($this->id !== null) $parameterArray['values'][] = ["exportID"=>$this->id];
        if ($this->enabled !== null) $parameterArray['values'][] = ["exportEnabled"=>$this->enabled];
    }
}