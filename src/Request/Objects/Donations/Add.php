<?php
/**
 * Donations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'donations';

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
     * @var \RescueGroups\Objects\Create\Donation[]
     */
    protected $addObjects = [];

    /**
     * Set the addable object
     *
     * @param \RescueGroups\Objects\Create\Donation $addObject
     * @return $this
     */
    public function addDonation(\RescueGroups\Objects\Create\Donation $addObject)
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