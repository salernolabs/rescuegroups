<?php
/**
 * AnimalGroups Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\AnimalGroups;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

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
     * Header
     * @var integer
     */
    private $groupHeaderID = null;

    /**
     * Animals
     * @var int
     */
    private $groupAnimals = null;

    /**
     * Name
     * @var string
     */
    private $webpageName = null;


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
        return 'search';
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
     * Set Animals
     *
     * @param int $groupAnimals
     * @return $this
     */
    public function setGroupAnimals($groupAnimals)
    {
        $this->groupAnimals = $groupAnimals;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $webpageName
     * @return $this
     */
    public function setWebpageName($webpageName)
    {
        $this->webpageName = $webpageName;

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
        if ($this->groupHeaderID !== null) $parameterArray['groupHeaderID'] = $this->groupHeaderID;
        if ($this->groupAnimals !== null) $parameterArray['groupAnimals'] = $this->groupAnimals;
        if ($this->webpageName !== null) $parameterArray['webpageName'] = $this->webpageName;

        $this->addSearchParameters($parameterArray);

    }
}