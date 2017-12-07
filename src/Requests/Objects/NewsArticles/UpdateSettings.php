<?php
/**
 * NewsArticles UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:25
 */
namespace RescueGroups\Requests\Objects\NewsArticles;

class UpdateSettings implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Enable the News Articles feature
     * @var string
     */
    private $enableNewsarticles = null;


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
        return 'updateSettings';
    }

    /**
     * Set Enable the News Articles feature
     *
     * @param string $enableNewsarticles
     * @return $this
     */
    public function setEnableNewsarticles($enableNewsarticles)
    {
        $this->enableNewsarticles = $enableNewsarticles;

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
        if ($this->enableNewsarticles !== null) $parameterArray['enableNewsarticles'] = $this->enableNewsarticles;

    }
}