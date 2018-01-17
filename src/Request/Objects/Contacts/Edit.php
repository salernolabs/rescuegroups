<?php
/**
 * Contacts Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Edit extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contacts';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'edit';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Editable  array
     *
     * @var \RescueGroups\Objects\Contact[]
     */
    protected $editObjects = [];

    /**
     * Set the editable object
     *
     * @param \RescueGroups\Objects\Contact $editObject
     * @return $this
     */
    public function updateContact(\RescueGroups\Objects\Contact $editObject)
    {
        $this->editObjects[] = $editObject;

        return $this;
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