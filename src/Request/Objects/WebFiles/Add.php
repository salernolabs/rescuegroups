<?php
/**
 * WebFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebFiles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Addable  array
     *
     * @var \RescueGroups\Objects\WebFile[]
     */
    protected $addObjects = [];

    /**
     * Set the addable object
     *
     * @param \RescueGroups\Objects\WebFile $addObject
     * @return $this
     */
    public function addWebFile(\RescueGroups\Objects\WebFile $addObject)
    {
        $this->addObjects[] = $addObject;

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
        return 'webfiles';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($this->addObjects))
        {
            throw new \RescueGroups\Exceptions\InvalidParameter("Missing add objects for query " . __CLASS__);
        }

        $parameterArray['values'] = [];

        foreach ($this->addObjects as $object)
        {
            $parameterArray['values'][] = $object->getArray(false);
        }
    }
}