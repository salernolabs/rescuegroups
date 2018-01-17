<?php
/**
 * Calls Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Calls;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'calls';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Addable  array
     *
     * @var \RescueGroups\Objects\Call[]
     */
    protected $addObjects = [];

    /**
     * Set the addable object
     *
     * @param \RescueGroups\Objects\Call $addObject
     * @return $this
     */
    public function addCall(\RescueGroups\Objects\Call $addObject)
    {
        $this->addObjects[] = $addObject;

        return $this;
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