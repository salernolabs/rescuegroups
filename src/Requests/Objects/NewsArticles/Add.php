<?php
/**
 * NewsArticles Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Requests\Objects\NewsArticles;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Title
     * @var string
     */
    private $articleTitle = null;

    /**
     * Description
     * @var string
     */
    private $articleDescription = null;

    /**
     * Date
     * @var \DateTime
     */
    private $articleDate = null;


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
     * Set Title
     *
     * @param string $articleTitle
     * @return $this
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $articleDescription
     * @return $this
     */
    public function setArticleDescription($articleDescription)
    {
        $this->articleDescription = $articleDescription;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $articleDate
     * @return $this
     */
    public function setArticleDate($articleDate)
    {
        $this->articleDate = $articleDate;

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
        if ($this->articleTitle !== null) $parameterArray['articleTitle'] = $this->articleTitle;
        if ($this->articleDescription !== null) $parameterArray['articleDescription'] = $this->articleDescription;
        if ($this->articleDate !== null) $parameterArray['articleDate'] = $this->articleDate;

    }
}