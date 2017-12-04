<?php
/**
 * ContactsGroups Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\ContactsGroups;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $groupID = null;

    /**
     * Name
     * @var string
     */
    private $groupName = null;

    /**
     * Business
     * @var string
     */
    private $groupBusiness = null;


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
        return 'contactsGroups';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $groupID
     * @return $this
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Set Business
     *
     * @param string $groupBusiness
     * @return $this
     */
    public function setGroupBusiness($groupBusiness)
    {
        $this->groupBusiness = $groupBusiness;

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
        if ($this->groupID !== null) $parameterArray['groupID'] = $this->groupID;
        if ($this->groupName !== null) $parameterArray['groupName'] = $this->groupName;
        if ($this->groupBusiness !== null) $parameterArray['groupBusiness'] = $this->groupBusiness;

    }
}