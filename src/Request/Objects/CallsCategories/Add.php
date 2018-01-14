<?php
/**
 * CallsCategories Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsCategories;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $categoryName = null;

    /**
     * Description
     *
     * @var string
     */
    private $categoryDescription = null;

    /**
     * Public
     *
     * @var string
     */
    private $categoryPublic = null;

    /**
     * Default Queue
     *
     * @var integer
     */
    private $categoryDefaultQueueID = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setCategoryName($value)
    {
        $this->categoryName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setCategoryDescription($value)
    {
        $this->categoryDescription = $value;

        return $this;
    }

    /**
     * Set Public
     *
     * @param string $value
     * @return $this
     */
    public function setCategoryPublic($value)
    {
        $this->categoryPublic = $value;

        return $this;
    }

    /**
     * Set Default Queue
     *
     * @param integer $value
     * @return $this
     */
    public function setCategoryDefaultQueueID($value)
    {
        $this->categoryDefaultQueueID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->categoryName !== null) $parameterArray['values'][] = ["categoryName"=>$this->categoryName];
        if ($this->categoryDescription !== null) $parameterArray['values'][] = ["categoryDescription"=>$this->categoryDescription];
        if ($this->categoryPublic !== null) $parameterArray['values'][] = ["categoryPublic"=>$this->categoryPublic];
        if ($this->categoryDefaultQueueID !== null) $parameterArray['values'][] = ["categoryDefaultQueueID"=>$this->categoryDefaultQueueID];
    }
}