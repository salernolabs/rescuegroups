<?php
/**
 * NewsArticles PublicView Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\NewsArticles;

class PublicView extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'newsarticles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicView';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    /**
     * ID
     *
     * @var integer
     */
    private $articleID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setArticleID($value)
    {
        $this->articleID = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->articleID !== null) $parameterArray['values'][] = ["articleID"=>$this->articleID];
    }
}