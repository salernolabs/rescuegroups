<?php
/**
 * CallsQueuesMembers Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Requests\Objects\CallsQueuesMembers;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $memberID = null;

    /**
     * Contact
     * @var integer
     */
    private $memberContactID = null;

    /**
     * Queue
     * @var integer
     */
    private $memberQueueID = null;

    /**
     * Manager
     * @var string
     */
    private $memberManager = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $memberCreatedDate = null;

    /**
     * Created by
     * @var integer
     */
    private $memberCreatedByID = null;

    /**
     * Updated Date
     * @var \DateTime
     */
    private $memberUpdatedDate = null;

    /**
     * Updated by
     * @var integer
     */
    private $memberUpdatedByID = null;

    /**
     * Call Queue
     * @var string
     */
    private $queueName = null;

    /**
     * Member
     * @var string
     */
    private $memberName = null;

    /**
     * Type
     * @var string
     */
    private $memberContactType = null;


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
        return 'callsQueuesMembers';
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
     * @param integer $memberID
     * @return $this
     */
    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $memberContactID
     * @return $this
     */
    public function setMemberContactID($memberContactID)
    {
        $this->memberContactID = $memberContactID;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param integer $memberQueueID
     * @return $this
     */
    public function setMemberQueueID($memberQueueID)
    {
        $this->memberQueueID = $memberQueueID;

        return $this;
    }

    /**
     * Set Manager
     *
     * @param string $memberManager
     * @return $this
     */
    public function setMemberManager($memberManager)
    {
        $this->memberManager = $memberManager;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $memberCreatedDate
     * @return $this
     */
    public function setMemberCreatedDate($memberCreatedDate)
    {
        $this->memberCreatedDate = $memberCreatedDate;

        return $this;
    }

    /**
     * Set Created by
     *
     * @param integer $memberCreatedByID
     * @return $this
     */
    public function setMemberCreatedByID($memberCreatedByID)
    {
        $this->memberCreatedByID = $memberCreatedByID;

        return $this;
    }

    /**
     * Set Updated Date
     *
     * @param \DateTime $memberUpdatedDate
     * @return $this
     */
    public function setMemberUpdatedDate($memberUpdatedDate)
    {
        $this->memberUpdatedDate = $memberUpdatedDate;

        return $this;
    }

    /**
     * Set Updated by
     *
     * @param integer $memberUpdatedByID
     * @return $this
     */
    public function setMemberUpdatedByID($memberUpdatedByID)
    {
        $this->memberUpdatedByID = $memberUpdatedByID;

        return $this;
    }

    /**
     * Set Call Queue
     *
     * @param string $queueName
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;

        return $this;
    }

    /**
     * Set Member
     *
     * @param string $memberName
     * @return $this
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $memberContactType
     * @return $this
     */
    public function setMemberContactType($memberContactType)
    {
        $this->memberContactType = $memberContactType;

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
        if ($this->memberID !== null) $parameterArray['memberID'] = $this->memberID;
        if ($this->memberContactID !== null) $parameterArray['memberContactID'] = $this->memberContactID;
        if ($this->memberQueueID !== null) $parameterArray['memberQueueID'] = $this->memberQueueID;
        if ($this->memberManager !== null) $parameterArray['memberManager'] = $this->memberManager;
        if ($this->memberCreatedDate !== null) $parameterArray['memberCreatedDate'] = $this->memberCreatedDate;
        if ($this->memberCreatedByID !== null) $parameterArray['memberCreatedByID'] = $this->memberCreatedByID;
        if ($this->memberUpdatedDate !== null) $parameterArray['memberUpdatedDate'] = $this->memberUpdatedDate;
        if ($this->memberUpdatedByID !== null) $parameterArray['memberUpdatedByID'] = $this->memberUpdatedByID;
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->memberName !== null) $parameterArray['memberName'] = $this->memberName;
        if ($this->memberContactType !== null) $parameterArray['memberContactType'] = $this->memberContactType;

        $this->addSearchParameters($parameterArray);

    }
}