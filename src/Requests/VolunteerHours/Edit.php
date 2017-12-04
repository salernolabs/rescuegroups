<?php
/**
 * VolunteerHours Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\VolunteerHours;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $volunteerHoursID = null;

    /**
     * Volunteer
     * @var integer
     */
    private $volunteerHoursVolunteerID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $volunteerHoursVolunteerDate = null;

    /**
     * Hours
     * @var float
     */
    private $volunteerHoursVolunteerLength = null;

    /**
     * Task
     * @var string
     */
    private $volunteerHoursVolunteerTask = null;


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
        return 'edit';
    }

    /**
     * Set ID
     *
     * @param integer $volunteerHoursID
     * @return $this
     */
    public function setVolunteerHoursID($volunteerHoursID)
    {
        $this->volunteerHoursID = $volunteerHoursID;

        return $this;
    }

    /**
     * Set Volunteer
     *
     * @param integer $volunteerHoursVolunteerID
     * @return $this
     */
    public function setVolunteerHoursVolunteerID($volunteerHoursVolunteerID)
    {
        $this->volunteerHoursVolunteerID = $volunteerHoursVolunteerID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $volunteerHoursVolunteerDate
     * @return $this
     */
    public function setVolunteerHoursVolunteerDate($volunteerHoursVolunteerDate)
    {
        $this->volunteerHoursVolunteerDate = $volunteerHoursVolunteerDate;

        return $this;
    }

    /**
     * Set Hours
     *
     * @param float $volunteerHoursVolunteerLength
     * @return $this
     */
    public function setVolunteerHoursVolunteerLength($volunteerHoursVolunteerLength)
    {
        $this->volunteerHoursVolunteerLength = $volunteerHoursVolunteerLength;

        return $this;
    }

    /**
     * Set Task
     *
     * @param string $volunteerHoursVolunteerTask
     * @return $this
     */
    public function setVolunteerHoursVolunteerTask($volunteerHoursVolunteerTask)
    {
        $this->volunteerHoursVolunteerTask = $volunteerHoursVolunteerTask;

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
        if ($this->volunteerHoursID !== null) $parameterArray['volunteerHoursID'] = $this->volunteerHoursID;
        if ($this->volunteerHoursVolunteerID !== null) $parameterArray['volunteerHoursVolunteerID'] = $this->volunteerHoursVolunteerID;
        if ($this->volunteerHoursVolunteerDate !== null) $parameterArray['volunteerHoursVolunteerDate'] = $this->volunteerHoursVolunteerDate;
        if ($this->volunteerHoursVolunteerLength !== null) $parameterArray['volunteerHoursVolunteerLength'] = $this->volunteerHoursVolunteerLength;
        if ($this->volunteerHoursVolunteerTask !== null) $parameterArray['volunteerHoursVolunteerTask'] = $this->volunteerHoursVolunteerTask;

    }
}