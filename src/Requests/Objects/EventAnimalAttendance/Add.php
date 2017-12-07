<?php
/**
 * EventAnimalAttendance Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Requests\Objects\EventAnimalAttendance;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Animal
     * @var integer
     */
    private $attendanceAnimalID = null;

    /**
     * Status
     * @var string
     */
    private $attendanceStatus = null;

    /**
     * Event
     * @var integer
     */
    private $attendanceEventID = null;


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
     * Set Animal
     *
     * @param integer $attendanceAnimalID
     * @return $this
     */
    public function setAttendanceAnimalID($attendanceAnimalID)
    {
        $this->attendanceAnimalID = $attendanceAnimalID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $attendanceStatus
     * @return $this
     */
    public function setAttendanceStatus($attendanceStatus)
    {
        $this->attendanceStatus = $attendanceStatus;

        return $this;
    }

    /**
     * Set Event
     *
     * @param integer $attendanceEventID
     * @return $this
     */
    public function setAttendanceEventID($attendanceEventID)
    {
        $this->attendanceEventID = $attendanceEventID;

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
        if ($this->attendanceAnimalID !== null) $parameterArray['attendanceAnimalID'] = $this->attendanceAnimalID;
        if ($this->attendanceStatus !== null) $parameterArray['attendanceStatus'] = $this->attendanceStatus;
        if ($this->attendanceEventID !== null) $parameterArray['attendanceEventID'] = $this->attendanceEventID;

    }
}