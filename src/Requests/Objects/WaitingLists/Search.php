<?php
/**
 * WaitingLists Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\WaitingLists;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $waitinglistID = null;

    /**
     * Name
     * @var string
     */
    private $waitinglistName = null;

    /**
     * Type
     * @var string
     */
    private $waitinglistType = null;

    /**
     * Comment
     * @var string
     */
    private $waitinglistComment = null;

    /**
     * Members Count
     * @var int
     */
    private $waitinglistMembersCount = null;


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
        return 'waitinglists';
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
     * @param integer $waitinglistID
     * @return $this
     */
    public function setWaitinglistID($waitinglistID)
    {
        $this->waitinglistID = $waitinglistID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $waitinglistName
     * @return $this
     */
    public function setWaitinglistName($waitinglistName)
    {
        $this->waitinglistName = $waitinglistName;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $waitinglistType
     * @return $this
     */
    public function setWaitinglistType($waitinglistType)
    {
        $this->waitinglistType = $waitinglistType;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $waitinglistComment
     * @return $this
     */
    public function setWaitinglistComment($waitinglistComment)
    {
        $this->waitinglistComment = $waitinglistComment;

        return $this;
    }

    /**
     * Set Members Count
     *
     * @param int $waitinglistMembersCount
     * @return $this
     */
    public function setWaitinglistMembersCount($waitinglistMembersCount)
    {
        $this->waitinglistMembersCount = $waitinglistMembersCount;

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
        if ($this->waitinglistID !== null) $parameterArray['waitinglistID'] = $this->waitinglistID;
        if ($this->waitinglistName !== null) $parameterArray['waitinglistName'] = $this->waitinglistName;
        if ($this->waitinglistType !== null) $parameterArray['waitinglistType'] = $this->waitinglistType;
        if ($this->waitinglistComment !== null) $parameterArray['waitinglistComment'] = $this->waitinglistComment;
        if ($this->waitinglistMembersCount !== null) $parameterArray['waitinglistMembersCount'] = $this->waitinglistMembersCount;

        $this->addSearchParameters($parameterArray);

    }
}