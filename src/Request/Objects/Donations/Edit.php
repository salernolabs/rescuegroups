<?php
/**
 * Donations Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Editable  array
     *
     * @var \RescueGroups\Objects\Donation[]
     */
    protected $editObjects = [];

    /**
     * Set the editable object
     *
     * @param \RescueGroups\Objects\Donation $editObject
     * @return $this
     */
    public function updateDonation(\RescueGroups\Objects\Donation $editObject)
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
        return 'donations';
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