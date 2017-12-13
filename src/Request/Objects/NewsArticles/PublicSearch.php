<?php
/**
 * NewsArticles PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\NewsArticles;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $articleID = null;

    /**
     * Organization
     * @var integer
     */
    private $articleOrgID = null;

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
     * Last updated
     * @var \DateTime
     */
    private $articleUpdatedDate = null;


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
        return 'publicSearch';
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
     * Set Organization
     *
     * @param integer $articleOrgID
     * @return $this
     */
    public function setArticleOrgID($articleOrgID)
    {
        $this->articleOrgID = $articleOrgID;

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
     * Set Last updated
     *
     * @param \DateTime $articleUpdatedDate
     * @return $this
     */
    public function setArticleUpdatedDate($articleUpdatedDate)
    {
        $this->articleUpdatedDate = $articleUpdatedDate;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->articleID !== null) $parameterArray['articleID'] = $this->articleID;
        if ($this->articleOrgID !== null) $parameterArray['articleOrgID'] = $this->articleOrgID;
        if ($this->articleTitle !== null) $parameterArray['articleTitle'] = $this->articleTitle;
        if ($this->articleDescription !== null) $parameterArray['articleDescription'] = $this->articleDescription;
        if ($this->articleDate !== null) $parameterArray['articleDate'] = $this->articleDate;
        if ($this->articleUpdatedDate !== null) $parameterArray['articleUpdatedDate'] = $this->articleUpdatedDate;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\NewsArticle[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\NewsArticle($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\NewsArticle($data)];
    }

}