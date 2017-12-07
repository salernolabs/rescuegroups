<?php
/**
 * AnimalStatuses Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Requests\Objects\AnimalStatuses;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $statusID = null;

    /**
     * Status name
     * @var string
     */
    private $statusName = null;

    /**
     * Status description
     * @var string
     */
    private $statusDescription = null;


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
        return 'animalStatuses';
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
     * @param integer $statusID
     * @return $this
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;

        return $this;
    }

    /**
     * Set Status name
     *
     * @param string $statusName
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Set Status description
     *
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;

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
        if ($this->statusID !== null) $parameterArray['statusID'] = $this->statusID;
        if ($this->statusName !== null) $parameterArray['statusName'] = $this->statusName;
        if ($this->statusDescription !== null) $parameterArray['statusDescription'] = $this->statusDescription;

        $this->addSearchParameters($parameterArray);

    }
}