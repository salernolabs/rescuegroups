<?php
/**
 * Animals SetEnabledSpecies Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetEnabledSpecies implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
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
        return 'setEnabledSpecies';
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