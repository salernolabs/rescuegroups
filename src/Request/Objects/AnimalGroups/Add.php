<?php
/**
 * AnimalGroups Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalGroups;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $groupName = null;

    /**
     * Header
     *
     * @var integer
     */
    private $groupHeaderID = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setGroupName($value)
    {
        $this->groupName = $value;

        return $this;
    }

    /**
     * Set Header
     *
     * @param integer $value
     * @return $this
     */
    public function setGroupHeaderID($value)
    {
        $this->groupHeaderID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->groupName !== null) $parameterArray['values'][] = ["groupName"=>$this->groupName];
        if ($this->groupHeaderID !== null) $parameterArray['values'][] = ["groupHeaderID"=>$this->groupHeaderID];
    }
}