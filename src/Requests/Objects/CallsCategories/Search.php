<?php
/**
 * CallsCategories Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Requests\Objects\CallsCategories;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

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
     * Default Queue Name
     * @var string
     */
    private $categoryDefaultQueueName = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $categoryCreatedDate = null;

    /**
     * Created by
     * @var integer
     */
    private $categoryCreatedByID = null;

    /**
     * Updated Date
     * @var \DateTime
     */
    private $categoryUpdatedDate = null;

    /**
     * Updated by
     * @var integer
     */
    private $categoryUpdatedByID = null;

    /**
     * Calls Count
     * @var int
     */
    private $categoryCallsCount = null;


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
        return 'search';
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
     * Set Default Queue Name
     *
     * @param string $categoryDefaultQueueName
     * @return $this
     */
    public function setCategoryDefaultQueueName($categoryDefaultQueueName)
    {
        $this->categoryDefaultQueueName = $categoryDefaultQueueName;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $categoryCreatedDate
     * @return $this
     */
    public function setCategoryCreatedDate($categoryCreatedDate)
    {
        $this->categoryCreatedDate = $categoryCreatedDate;

        return $this;
    }

    /**
     * Set Created by
     *
     * @param integer $categoryCreatedByID
     * @return $this
     */
    public function setCategoryCreatedByID($categoryCreatedByID)
    {
        $this->categoryCreatedByID = $categoryCreatedByID;

        return $this;
    }

    /**
     * Set Updated Date
     *
     * @param \DateTime $categoryUpdatedDate
     * @return $this
     */
    public function setCategoryUpdatedDate($categoryUpdatedDate)
    {
        $this->categoryUpdatedDate = $categoryUpdatedDate;

        return $this;
    }

    /**
     * Set Updated by
     *
     * @param integer $categoryUpdatedByID
     * @return $this
     */
    public function setCategoryUpdatedByID($categoryUpdatedByID)
    {
        $this->categoryUpdatedByID = $categoryUpdatedByID;

        return $this;
    }

    /**
     * Set Calls Count
     *
     * @param int $categoryCallsCount
     * @return $this
     */
    public function setCategoryCallsCount($categoryCallsCount)
    {
        $this->categoryCallsCount = $categoryCallsCount;

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
        if ($this->categoryDefaultQueueName !== null) $parameterArray['categoryDefaultQueueName'] = $this->categoryDefaultQueueName;
        if ($this->categoryCreatedDate !== null) $parameterArray['categoryCreatedDate'] = $this->categoryCreatedDate;
        if ($this->categoryCreatedByID !== null) $parameterArray['categoryCreatedByID'] = $this->categoryCreatedByID;
        if ($this->categoryUpdatedDate !== null) $parameterArray['categoryUpdatedDate'] = $this->categoryUpdatedDate;
        if ($this->categoryUpdatedByID !== null) $parameterArray['categoryUpdatedByID'] = $this->categoryUpdatedByID;
        if ($this->categoryCallsCount !== null) $parameterArray['categoryCallsCount'] = $this->categoryCallsCount;

        $this->addSearchParameters($parameterArray);

    }
}