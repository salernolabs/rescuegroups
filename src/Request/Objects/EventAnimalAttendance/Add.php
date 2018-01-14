<?php
/**
 * EventAnimalAttendance Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     *
     * @var integer
     */
    private $attendanceAnimalID = null;

    /**
     * Status
     *
     * @var string
     */
    private $attendanceStatus = null;

    /**
     * Event
     *
     * @var integer
     */
    private $attendanceEventID = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAttendanceAnimalID($value)
    {
        $this->attendanceAnimalID = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setAttendanceStatus($value)
    {
        $this->attendanceStatus = $value;

        return $this;
    }

    /**
     * Set Event
     *
     * @param integer $value
     * @return $this
     */
    public function setAttendanceEventID($value)
    {
        $this->attendanceEventID = $value;

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
        return 'eventanimalattendance';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->attendanceAnimalID !== null) $parameterArray['values'][] = ["attendanceAnimalID"=>$this->attendanceAnimalID];
        if ($this->attendanceStatus !== null) $parameterArray['values'][] = ["attendanceStatus"=>$this->attendanceStatus];
        if ($this->attendanceEventID !== null) $parameterArray['values'][] = ["attendanceEventID"=>$this->attendanceEventID];
    }
}