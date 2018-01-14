<?php
/**
 * VolunteerHours Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteerHours;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Volunteer
     *
     * @var integer
     */
    private $volunteerID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $volunteerDate = null;

    /**
     * Hours
     *
     * @var float
     */
    private $volunteerLength = null;

    /**
     * Task
     *
     * @var string
     */
    private $volunteerTask = null;


    /**
     * Set Volunteer
     *
     * @param integer $value
     * @return $this
     */
    public function setVolunteerID($value)
    {
        $this->volunteerID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setVolunteerDate($value)
    {
        $this->volunteerDate = $value;

        return $this;
    }

    /**
     * Set Hours
     *
     * @param float $value
     * @return $this
     */
    public function setVolunteerLength($value)
    {
        $this->volunteerLength = $value;

        return $this;
    }

    /**
     * Set Task
     *
     * @param string $value
     * @return $this
     */
    public function setVolunteerTask($value)
    {
        $this->volunteerTask = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->volunteerID !== null) $parameterArray['values'][] = ["volunteerHoursVolunteerID"=>$this->volunteerID];
        if ($this->volunteerDate !== null) $parameterArray['values'][] = ["volunteerHoursVolunteerDate"=>$this->volunteerDate];
        if ($this->volunteerLength !== null) $parameterArray['values'][] = ["volunteerHoursVolunteerLength"=>$this->volunteerLength];
        if ($this->volunteerTask !== null) $parameterArray['values'][] = ["volunteerHoursVolunteerTask"=>$this->volunteerTask];
    }
}