<?php
/**
 * EventAnimalAttendance PublicView Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class PublicView extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'eventanimalattendance';

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
    private $id = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

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
        if ($this->id !== null) $value["attendanceID"] = $this->id;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}