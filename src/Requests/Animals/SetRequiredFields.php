<?php
/**
 * Animals SetRequiredFields Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Animals;

class SetRequiredFields implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Field list
     * @var string
     */
    private $fieldlist = null;


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
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'setRequiredFields';
    }

    /**
     * Set Field list
     *
     * @param string $fieldlist
     * @return $this
     */
    public function setFieldlist($fieldlist)
    {
        $this->fieldlist = $fieldlist;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->fieldlist !== null) $parameterArray['fieldlist'] = $this->fieldlist;

    }
}