<?php
/**
 * AnimalsExports UpdateExports Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateExports extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
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
    private $exportID = null;

    /**
     * Export enabled
     *
     * @var string
     */
    private $exportEnabled = null;


    /**
     * Set Export ID
     *
     * @param integer $value
     * @return $this
     */
    public function setExportID($value)
    {
        $this->exportID = $value;

        return $this;
    }

    /**
     * Set Export enabled
     *
     * @param string $value
     * @return $this
     */
    public function setExportEnabled($value)
    {
        $this->exportEnabled = $value;

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

        if ($this->exportID !== null) $parameterArray['values'][] = ["exportID"=>$this->exportID];
        if ($this->exportEnabled !== null) $parameterArray['values'][] = ["exportEnabled"=>$this->exportEnabled];
    }
}