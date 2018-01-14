<?php
/**
 * NewsArticles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\NewsArticles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Title
     *
     * @var string
     */
    private $articleTitle = null;

    /**
     * Description
     *
     * @var string
     */
    private $articleDescription = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $articleDate = null;


    /**
     * Set Title
     *
     * @param string $value
     * @return $this
     */
    public function setArticleTitle($value)
    {
        $this->articleTitle = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setArticleDescription($value)
    {
        $this->articleDescription = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setArticleDate($value)
    {
        $this->articleDate = $value;

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
        return 'newsarticles';
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

        if ($this->articleTitle !== null) $parameterArray['values'][] = ["articleTitle"=>$this->articleTitle];
        if ($this->articleDescription !== null) $parameterArray['values'][] = ["articleDescription"=>$this->articleDescription];
        if ($this->articleDate !== null) $parameterArray['values'][] = ["articleDate"=>$this->articleDate];
    }
}