<?php
/**
 * NewsArticles UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\NewsArticles;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'newsarticles';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Enable the News Articles feature
     *
     * @var string
     */
    private $enableNewsarticles = null;


    /**
     * Set Enable the News Articles feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnableNewsarticles($value)
    {
        $this->enableNewsarticles = $value;

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

        if ($this->enableNewsarticles !== null) $parameterArray['values'][] = ["enableNewsarticles"=>$this->enableNewsarticles];
    }
}