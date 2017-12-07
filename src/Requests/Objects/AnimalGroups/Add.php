<?php
/**
 * AnimalGroups Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:34
 */
namespace RescueGroups\Requests\Objects\AnimalGroups;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Name
     * @var string
     */
    private $groupName = null;

    /**
     * Header
     * @var integer
     */
    private $groupHeaderID = null;


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
        return 'animalGroups';
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
     * Set Header
     *
     * @param integer $groupHeaderID
     * @return $this
     */
    public function setGroupHeaderID($groupHeaderID)
    {
        $this->groupHeaderID = $groupHeaderID;

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
        if ($this->groupName !== null) $parameterArray['groupName'] = $this->groupName;
        if ($this->groupHeaderID !== null) $parameterArray['groupHeaderID'] = $this->groupHeaderID;

    }
}