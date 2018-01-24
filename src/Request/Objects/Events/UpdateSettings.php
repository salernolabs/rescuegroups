<?php
/**
 * Events UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'events';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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
    public function setEventsMapWebsite($value)
    {
        $this->setEventsMapWebsite = $value;

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

        $value = [];
        if ($this->enableEvents !== null) $value["enableEvents"] = $this->enableEvents;
        if ($this->setEventsMapWebsite !== null) $value["setEventsMapWebsite"] = $this->setEventsMapWebsite;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}