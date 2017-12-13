<?php
/**
 * EventAnimalAttendance Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $attendanceID = null;

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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $attendanceID
     * @return $this
     */
    public function setAttendanceID($attendanceID)
    {
        $this->attendanceID = $attendanceID;

        return $this;
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
        if ($this->attendanceID !== null) $parameterArray['attendanceID'] = $this->attendanceID;
        if ($this->attendanceAnimalID !== null) $parameterArray['attendanceAnimalID'] = $this->attendanceAnimalID;
        if ($this->attendanceStatus !== null) $parameterArray['attendanceStatus'] = $this->attendanceStatus;
        if ($this->attendanceEventID !== null) $parameterArray['attendanceEventID'] = $this->attendanceEventID;

    }
}