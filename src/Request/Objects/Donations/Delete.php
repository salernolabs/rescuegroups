<?php
/**
 * Donations Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Delete extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'donations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $donationID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setDonationID($value)
    {
        $this->donationID = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->donationID !== null) $parameterArray['values'][] = ["donationID"=>$this->donationID];
    }
}