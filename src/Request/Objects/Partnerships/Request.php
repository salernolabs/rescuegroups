<?php
/**
 * Partnerships Request Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Partnerships;

class Request implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Sharing Org
     *
     * @var integer
     */
    private $partnershipSharingOrgID = null;


    /**
     * Set Sharing Org
     *
     * @param integer $value
     * @return $this
     */
    public function setPartnershipSharingOrgID($value)
    {
        $this->partnershipSharingOrgID = $value;

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
        return 'partnerships';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'request';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->partnershipSharingOrgID !== null) $parameterArray['values'][] = ["partnershipSharingOrgID"=>$this->partnershipSharingOrgID];
    }
}