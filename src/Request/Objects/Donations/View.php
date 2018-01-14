<?php
/**
 * Donations View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'view';
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