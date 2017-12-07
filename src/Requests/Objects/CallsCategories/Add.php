<?php
/**
 * CallsCategories Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\CallsCategories;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Name
     * @var string
     */
    private $categoryName = null;

    /**
     * Description
     * @var string
     */
    private $categoryDescription = null;

    /**
     * Public
     * @var string
     */
    private $categoryPublic = null;

    /**
     * Default Queue
     * @var integer
     */
    private $categoryDefaultQueueID = null;


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
        return 'callsCategories';
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
     * @param string $categoryName
     * @return $this
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $categoryDescription
     * @return $this
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Set Public
     *
     * @param string $categoryPublic
     * @return $this
     */
    public function setCategoryPublic($categoryPublic)
    {
        $this->categoryPublic = $categoryPublic;

        return $this;
    }

    /**
     * Set Default Queue
     *
     * @param integer $categoryDefaultQueueID
     * @return $this
     */
    public function setCategoryDefaultQueueID($categoryDefaultQueueID)
    {
        $this->categoryDefaultQueueID = $categoryDefaultQueueID;

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
        if ($this->categoryName !== null) $parameterArray['categoryName'] = $this->categoryName;
        if ($this->categoryDescription !== null) $parameterArray['categoryDescription'] = $this->categoryDescription;
        if ($this->categoryPublic !== null) $parameterArray['categoryPublic'] = $this->categoryPublic;
        if ($this->categoryDefaultQueueID !== null) $parameterArray['categoryDefaultQueueID'] = $this->categoryDefaultQueueID;

    }
}