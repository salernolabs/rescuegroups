<?php
/**
 * ContactsGroups Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactsGroups;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'add';
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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->groupName !== null) $parameterArray['groupName'] = $this->groupName;
        if ($this->groupBusiness !== null) $parameterArray['groupBusiness'] = $this->groupBusiness;

    }
}