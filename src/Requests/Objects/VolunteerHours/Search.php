<?php
/**
 * VolunteerHours Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\VolunteerHours;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $id = null;

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
     * Added Date
     * @var \DateTime
     */
    private $createdDate = null;

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
     * Volunteer Type
     * @var string
     */
    private $volunteerType = null;


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
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $volunteerHoursID
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set Added Date
     *
     * @param \DateTime $volunteerHoursCreatedDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

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
     * Set Volunteer Type
     *
     * @param string $volunteerType
     * @return $this
     */
    public function setVolunteerType($volunteerType)
    {
        $this->volunteerType = $volunteerType;

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
        if ($this->id !== null) $parameterArray['volunteerHoursID'] = $this->id;
        if ($this->volunteerID !== null) $parameterArray['volunteerHoursVolunteerID'] = $this->volunteerID;
        if ($this->volunteerDate !== null) $parameterArray['volunteerHoursVolunteerDate'] = $this->volunteerDate;
        if ($this->createdDate !== null) $parameterArray['volunteerHoursCreatedDate'] = $this->createdDate;
        if ($this->volunteerLength !== null) $parameterArray['volunteerHoursVolunteerLength'] = $this->volunteerLength;
        if ($this->volunteerTask !== null) $parameterArray['volunteerHoursVolunteerTask'] = $this->volunteerTask;
        if ($this->volunteerType !== null) $parameterArray['volunteerType'] = $this->volunteerType;

        $this->addSearchParameters($parameterArray);

    }
}