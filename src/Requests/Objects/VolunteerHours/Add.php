<?php
/**
 * VolunteerHours Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\VolunteerHours;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Volunteer
     * @var integer
     */
    private $volunteerID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $volunteerDate = null;

    /**
     * Hours
     * @var float
     */
    private $volunteerLength = null;

    /**
     * Task
     * @var string
     */
    private $volunteerTask = null;


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
        return 'volunteerHours';
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
     * Set Volunteer
     *
     * @param integer $volunteerHoursVolunteerID
     * @return $this
     */
    public function setVolunteerID($volunteerID)
    {
        $this->volunteerID = $volunteerID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $volunteerHoursVolunteerDate
     * @return $this
     */
    public function setVolunteerDate($volunteerDate)
    {
        $this->volunteerDate = $volunteerDate;

        return $this;
    }

    /**
     * Set Hours
     *
     * @param float $volunteerHoursVolunteerLength
     * @return $this
     */
    public function setVolunteerLength($volunteerLength)
    {
        $this->volunteerLength = $volunteerLength;

        return $this;
    }

    /**
     * Set Task
     *
     * @param string $volunteerHoursVolunteerTask
     * @return $this
     */
    public function setVolunteerTask($volunteerTask)
    {
        $this->volunteerTask = $volunteerTask;

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
        if ($this->volunteerID !== null) $parameterArray['volunteerHoursVolunteerID'] = $this->volunteerID;
        if ($this->volunteerDate !== null) $parameterArray['volunteerHoursVolunteerDate'] = $this->volunteerDate;
        if ($this->volunteerLength !== null) $parameterArray['volunteerHoursVolunteerLength'] = $this->volunteerLength;
        if ($this->volunteerTask !== null) $parameterArray['volunteerHoursVolunteerTask'] = $this->volunteerTask;

    }
}