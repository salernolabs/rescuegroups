<?php
/**
 * CallsQueues Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $queueID = null;

    /**
     * Name
     * @var string
     */
    private $queueName = null;

    /**
     * From Email Address
     * @var string
     */
    private $queueFromEmail = null;

    /**
     * Default Urgency
     * @var integer
     */
    private $queueDefaultUrgencyID = null;

    /**
     * Default Urgency
     * @var string
     */
    private $queueDefaultUrgencyName = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $queueCreatedDate = null;

    /**
     * Created by
     * @var integer
     */
    private $queueCreatedByID = null;

    /**
     * Updated Date
     * @var \DateTime
     */
    private $queueUpdatedDate = null;

    /**
     * Updated by
     * @var integer
     */
    private $queueUpdatedByID = null;

    /**
     * Open Calls
     * @var string
     */
    private $queueOpenCallsCount = null;

    /**
     * Members
     * @var string
     */
    private $queueMembersCount = null;


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
        return 'callsQueues';
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
     * @param integer $queueID
     * @return $this
     */
    public function setQueueID($queueID)
    {
        $this->queueID = $queueID;

        return $this;
    }

    /**
     * Set Name
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
     * Set From Email Address
     *
     * @param string $queueFromEmail
     * @return $this
     */
    public function setQueueFromEmail($queueFromEmail)
    {
        $this->queueFromEmail = $queueFromEmail;

        return $this;
    }

    /**
     * Set Default Urgency
     *
     * @param integer $queueDefaultUrgencyID
     * @return $this
     */
    public function setQueueDefaultUrgencyID($queueDefaultUrgencyID)
    {
        $this->queueDefaultUrgencyID = $queueDefaultUrgencyID;

        return $this;
    }

    /**
     * Set Default Urgency
     *
     * @param string $queueDefaultUrgencyName
     * @return $this
     */
    public function setQueueDefaultUrgencyName($queueDefaultUrgencyName)
    {
        $this->queueDefaultUrgencyName = $queueDefaultUrgencyName;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $queueCreatedDate
     * @return $this
     */
    public function setQueueCreatedDate($queueCreatedDate)
    {
        $this->queueCreatedDate = $queueCreatedDate;

        return $this;
    }

    /**
     * Set Created by
     *
     * @param integer $queueCreatedByID
     * @return $this
     */
    public function setQueueCreatedByID($queueCreatedByID)
    {
        $this->queueCreatedByID = $queueCreatedByID;

        return $this;
    }

    /**
     * Set Updated Date
     *
     * @param \DateTime $queueUpdatedDate
     * @return $this
     */
    public function setQueueUpdatedDate($queueUpdatedDate)
    {
        $this->queueUpdatedDate = $queueUpdatedDate;

        return $this;
    }

    /**
     * Set Updated by
     *
     * @param integer $queueUpdatedByID
     * @return $this
     */
    public function setQueueUpdatedByID($queueUpdatedByID)
    {
        $this->queueUpdatedByID = $queueUpdatedByID;

        return $this;
    }

    /**
     * Set Open Calls
     *
     * @param string $queueOpenCallsCount
     * @return $this
     */
    public function setQueueOpenCallsCount($queueOpenCallsCount)
    {
        $this->queueOpenCallsCount = $queueOpenCallsCount;

        return $this;
    }

    /**
     * Set Members
     *
     * @param string $queueMembersCount
     * @return $this
     */
    public function setQueueMembersCount($queueMembersCount)
    {
        $this->queueMembersCount = $queueMembersCount;

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
        if ($this->queueID !== null) $parameterArray['queueID'] = $this->queueID;
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->queueFromEmail !== null) $parameterArray['queueFromEmail'] = $this->queueFromEmail;
        if ($this->queueDefaultUrgencyID !== null) $parameterArray['queueDefaultUrgencyID'] = $this->queueDefaultUrgencyID;
        if ($this->queueDefaultUrgencyName !== null) $parameterArray['queueDefaultUrgencyName'] = $this->queueDefaultUrgencyName;
        if ($this->queueCreatedDate !== null) $parameterArray['queueCreatedDate'] = $this->queueCreatedDate;
        if ($this->queueCreatedByID !== null) $parameterArray['queueCreatedByID'] = $this->queueCreatedByID;
        if ($this->queueUpdatedDate !== null) $parameterArray['queueUpdatedDate'] = $this->queueUpdatedDate;
        if ($this->queueUpdatedByID !== null) $parameterArray['queueUpdatedByID'] = $this->queueUpdatedByID;
        if ($this->queueOpenCallsCount !== null) $parameterArray['queueOpenCallsCount'] = $this->queueOpenCallsCount;
        if ($this->queueMembersCount !== null) $parameterArray['queueMembersCount'] = $this->queueMembersCount;

        $this->addSearchParameters($parameterArray);

    }
}