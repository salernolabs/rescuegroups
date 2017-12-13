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
     * @var integer
     */
    private $exportID = null;

    /**
     * Export enabled
     * @var string
     */
    private $exportEnabled = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
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
     * Set Export ID
     *
     * @param integer $exportID
     * @return $this
     */
    public function setExportID($exportID)
    {
        $this->exportID = $exportID;

        return $this;
    }

    /**
     * Set Export enabled
     *
     * @param string $exportEnabled
     * @return $this
     */
    public function setExportEnabled($exportEnabled)
    {
        $this->exportEnabled = $exportEnabled;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->exportID !== null) $parameterArray['exportID'] = $this->exportID;
        if ($this->exportEnabled !== null) $parameterArray['exportEnabled'] = $this->exportEnabled;

    }
}