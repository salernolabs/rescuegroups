<?php
/**
 * AnimalsExports UpdateExports Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateExports implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalsExports';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'updateExports';
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