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
     * @var integer
     */
    private $partnershipSharingOrgID = null;


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
     * Set Sharing Org
     *
     * @param integer $partnershipSharingOrgID
     * @return $this
     */
    public function setPartnershipSharingOrgID($partnershipSharingOrgID)
    {
        $this->partnershipSharingOrgID = $partnershipSharingOrgID;

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
        if ($this->partnershipSharingOrgID !== null) $parameterArray['partnershipSharingOrgID'] = $this->partnershipSharingOrgID;

    }
}