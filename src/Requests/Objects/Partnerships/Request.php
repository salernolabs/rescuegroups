<?php
/**
 * Partnerships Request Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Requests\Objects\Partnerships;

class Request implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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