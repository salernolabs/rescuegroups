<?php
/**
 * NewsArticles Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:25
 */
namespace RescueGroups\Requests\Objects\NewsArticles;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $articleID = null;

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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $articleID
     * @return $this
     */
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;

        return $this;
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
        if ($this->articleID !== null) $parameterArray['articleID'] = $this->articleID;
        if ($this->articleTitle !== null) $parameterArray['articleTitle'] = $this->articleTitle;
        if ($this->articleDescription !== null) $parameterArray['articleDescription'] = $this->articleDescription;
        if ($this->articleDate !== null) $parameterArray['articleDate'] = $this->articleDate;

    }
}