<?php
/**
 * CallsCategories Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Requests\Objects\CallsCategories;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $categoryID = null;

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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $categoryID
     * @return $this
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;

        return $this;
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
        if ($this->categoryID !== null) $parameterArray['categoryID'] = $this->categoryID;
        if ($this->categoryName !== null) $parameterArray['categoryName'] = $this->categoryName;
        if ($this->categoryDescription !== null) $parameterArray['categoryDescription'] = $this->categoryDescription;
        if ($this->categoryPublic !== null) $parameterArray['categoryPublic'] = $this->categoryPublic;
        if ($this->categoryDefaultQueueID !== null) $parameterArray['categoryDefaultQueueID'] = $this->categoryDefaultQueueID;

    }
}