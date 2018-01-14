<?php
/**
 * Animals SetDisabledFields Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetDisabledFields implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'setDisabledFields';
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