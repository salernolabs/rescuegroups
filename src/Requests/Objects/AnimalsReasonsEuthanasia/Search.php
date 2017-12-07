<?php
/**
 * AnimalsReasonsEuthanasia Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Requests\Objects\AnimalsReasonsEuthanasia;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Reason ID
     * @var integer
     */
    private $reasonID = null;

    /**
     * Reason
     * @var string
     */
    private $reasonName = null;


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
        return 'animalsReasonsEuthanasia';
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
     * Set Reason ID
     *
     * @param integer $reasonID
     * @return $this
     */
    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param string $reasonName
     * @return $this
     */
    public function setReasonName($reasonName)
    {
        $this->reasonName = $reasonName;

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
        if ($this->reasonID !== null) $parameterArray['reasonID'] = $this->reasonID;
        if ($this->reasonName !== null) $parameterArray['reasonName'] = $this->reasonName;

        $this->addSearchParameters($parameterArray);

    }
}