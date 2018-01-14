<?php
/**
 * NewsArticles UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\NewsArticles;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'updateSettings';
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