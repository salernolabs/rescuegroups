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
     * @var string
     */
    private $enableEvents = null;

    /**
     * Map website to use with the Events feature
     * @var string
     */
    private $setEventsMapWebsite = null;


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
     * Set Enable the Events feature
     *
     * @param string $enableEvents
     * @return $this
     */
    public function setEnableEvents($enableEvents)
    {
        $this->enableEvents = $enableEvents;

        return $this;
    }

    /**
     * Set Map website to use with the Events feature
     *
     * @param string $setEventsMapWebsite
     * @return $this
     */
    public function setSetEventsMapWebsite($setEventsMapWebsite)
    {
        $this->setEventsMapWebsite = $setEventsMapWebsite;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->enableEvents !== null) $parameterArray['enableEvents'] = $this->enableEvents;
        if ($this->setEventsMapWebsite !== null) $parameterArray['setEventsMapWebsite'] = $this->setEventsMapWebsite;

    }
}