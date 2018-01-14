<?php
/**
 * AnimalsReasonsEuthanasia Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsReasonsEuthanasia;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Editable  array
     *
     * @var \RescueGroups\Objects\AnimalsReasonsEuthanasia[]
     */
    protected $editObjects = [];

    /**
     * Set the editable object
     *
     * @param \RescueGroups\Objects\AnimalsReasonsEuthanasia $editObject
     * @return $this
     */
    public function updateAnimalsReasonsEuthanasia(\RescueGroups\Objects\AnimalsReasonsEuthanasia $editObject)
    {
        $this->editObjects[] = $editObject;

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
        return 'animalsReasonsEuthanasia';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($this->editObjects))
        {
            throw new \RescueGroups\Exceptions\InvalidParameter("Missing editable object for query " . __CLASS__);
        }

        $parameterArray['values'] = [];

        foreach ($this->editObjects as $object)
        {
            $parameterArray['values'][] = $object->getArray();
        }
    }
}