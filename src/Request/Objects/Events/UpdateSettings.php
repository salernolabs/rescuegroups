<?php
/**
 * Events UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class UpdateSettings implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Enable the Events feature
     *
     * @var string
     */
    private $enableEvents = null;

    /**
     * Map website to use with the Events feature
     *
     * @var string
     */
    private $setEventsMapWebsite = null;


    /**
     * Set Enable the Events feature
     *
     * @param string $value
     * @return $this
     */
    public function setEnableEvents($value)
    {
        $this->enableEvents = $value;

        return $this;
    }

    /**
     * Set Map website to use with the Events feature
     *
     * @param string $value
     * @return $this
     */
    public function setSetEventsMapWebsite($value)
    {
        $this->setEventsMapWebsite = $value;

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
        return 'events';
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

        if ($this->enableEvents !== null) $parameterArray['values'][] = ["enableEvents"=>$this->enableEvents];
        if ($this->setEventsMapWebsite !== null) $parameterArray['values'][] = ["setEventsMapWebsite"=>$this->setEventsMapWebsite];
    }
}