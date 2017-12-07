<?php
/**
 * Partnerships Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Requests\Objects\Partnerships;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $partnershipID = null;

    /**
     * Sharing Org
     * @var integer
     */
    private $partnershipRequestOrgID = null;

    /**
     * Sharing Org
     * @var integer
     */
    private $partnershipRequestOrgName = null;

    /**
     * Sharing Org
     * @var integer
     */
    private $partnershipSharingOrgID = null;

    /**
     * Sharing Org Name
     * @var integer
     */
    private $partnershipSharingOrgName = null;

    /**
     * Request Date
     * @var \DateTime
     */
    private $partnershipRequestDate = null;

    /**
     * Requested by
     * @var integer
     */
    private $partnershipRequestedByID = null;

    /**
     * Requested by
     * @var string
     */
    private $partnershipRequestedBy = null;

    /**
     * Response by
     * @var integer
     */
    private $partnershipResponseByID = null;

    /**
     * Response by
     * @var string
     */
    private $partnershipResponseBy = null;

    /**
     * Status
     * @var string
     */
    private $partnershipStatus = null;

    /**
     * Response Date
     * @var \DateTime
     */
    private $partnershipResponseDate = null;


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
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $partnershipID
     * @return $this
     */
    public function setPartnershipID($partnershipID)
    {
        $this->partnershipID = $partnershipID;

        return $this;
    }

    /**
     * Set Sharing Org
     *
     * @param integer $partnershipRequestOrgID
     * @return $this
     */
    public function setPartnershipRequestOrgID($partnershipRequestOrgID)
    {
        $this->partnershipRequestOrgID = $partnershipRequestOrgID;

        return $this;
    }

    /**
     * Set Sharing Org
     *
     * @param integer $partnershipRequestOrgName
     * @return $this
     */
    public function setPartnershipRequestOrgName($partnershipRequestOrgName)
    {
        $this->partnershipRequestOrgName = $partnershipRequestOrgName;

        return $this;
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
     * Set Sharing Org Name
     *
     * @param integer $partnershipSharingOrgName
     * @return $this
     */
    public function setPartnershipSharingOrgName($partnershipSharingOrgName)
    {
        $this->partnershipSharingOrgName = $partnershipSharingOrgName;

        return $this;
    }

    /**
     * Set Request Date
     *
     * @param \DateTime $partnershipRequestDate
     * @return $this
     */
    public function setPartnershipRequestDate($partnershipRequestDate)
    {
        $this->partnershipRequestDate = $partnershipRequestDate;

        return $this;
    }

    /**
     * Set Requested by
     *
     * @param integer $partnershipRequestedByID
     * @return $this
     */
    public function setPartnershipRequestedByID($partnershipRequestedByID)
    {
        $this->partnershipRequestedByID = $partnershipRequestedByID;

        return $this;
    }

    /**
     * Set Requested by
     *
     * @param string $partnershipRequestedBy
     * @return $this
     */
    public function setPartnershipRequestedBy($partnershipRequestedBy)
    {
        $this->partnershipRequestedBy = $partnershipRequestedBy;

        return $this;
    }

    /**
     * Set Response by
     *
     * @param integer $partnershipResponseByID
     * @return $this
     */
    public function setPartnershipResponseByID($partnershipResponseByID)
    {
        $this->partnershipResponseByID = $partnershipResponseByID;

        return $this;
    }

    /**
     * Set Response by
     *
     * @param string $partnershipResponseBy
     * @return $this
     */
    public function setPartnershipResponseBy($partnershipResponseBy)
    {
        $this->partnershipResponseBy = $partnershipResponseBy;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $partnershipStatus
     * @return $this
     */
    public function setPartnershipStatus($partnershipStatus)
    {
        $this->partnershipStatus = $partnershipStatus;

        return $this;
    }

    /**
     * Set Response Date
     *
     * @param \DateTime $partnershipResponseDate
     * @return $this
     */
    public function setPartnershipResponseDate($partnershipResponseDate)
    {
        $this->partnershipResponseDate = $partnershipResponseDate;

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
        if ($this->partnershipID !== null) $parameterArray['partnershipID'] = $this->partnershipID;
        if ($this->partnershipRequestOrgID !== null) $parameterArray['partnershipRequestOrgID'] = $this->partnershipRequestOrgID;
        if ($this->partnershipRequestOrgName !== null) $parameterArray['partnershipRequestOrgName'] = $this->partnershipRequestOrgName;
        if ($this->partnershipSharingOrgID !== null) $parameterArray['partnershipSharingOrgID'] = $this->partnershipSharingOrgID;
        if ($this->partnershipSharingOrgName !== null) $parameterArray['partnershipSharingOrgName'] = $this->partnershipSharingOrgName;
        if ($this->partnershipRequestDate !== null) $parameterArray['partnershipRequestDate'] = $this->partnershipRequestDate;
        if ($this->partnershipRequestedByID !== null) $parameterArray['partnershipRequestedByID'] = $this->partnershipRequestedByID;
        if ($this->partnershipRequestedBy !== null) $parameterArray['partnershipRequestedBy'] = $this->partnershipRequestedBy;
        if ($this->partnershipResponseByID !== null) $parameterArray['partnershipResponseByID'] = $this->partnershipResponseByID;
        if ($this->partnershipResponseBy !== null) $parameterArray['partnershipResponseBy'] = $this->partnershipResponseBy;
        if ($this->partnershipStatus !== null) $parameterArray['partnershipStatus'] = $this->partnershipStatus;
        if ($this->partnershipResponseDate !== null) $parameterArray['partnershipResponseDate'] = $this->partnershipResponseDate;

        $this->addSearchParameters($parameterArray);

    }
}