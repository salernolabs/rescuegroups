<?php
/**
 * AnimalsMeetRequests Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:35
 */
namespace RescueGroups\Requests\Objects\AnimalsMeetRequests;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Animal ID
     * @var integer
     */
    private $meetrequestAnimalID = null;

    /**
     * Contact ID
     * @var integer
     */
    private $meetrequestContactID = null;

    /**
     * Event ID
     * @var integer
     */
    private $meetrequestEventID = null;

    /**
     * Location ID
     * @var integer
     */
    private $meetrequestLocationID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $meetrequestDate = null;


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
        return 'animalsMeetrequests';
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
     * Set Animal ID
     *
     * @param integer $meetrequestAnimalID
     * @return $this
     */
    public function setMeetrequestAnimalID($meetrequestAnimalID)
    {
        $this->meetrequestAnimalID = $meetrequestAnimalID;

        return $this;
    }

    /**
     * Set Contact ID
     *
     * @param integer $meetrequestContactID
     * @return $this
     */
    public function setMeetrequestContactID($meetrequestContactID)
    {
        $this->meetrequestContactID = $meetrequestContactID;

        return $this;
    }

    /**
     * Set Event ID
     *
     * @param integer $meetrequestEventID
     * @return $this
     */
    public function setMeetrequestEventID($meetrequestEventID)
    {
        $this->meetrequestEventID = $meetrequestEventID;

        return $this;
    }

    /**
     * Set Location ID
     *
     * @param integer $meetrequestLocationID
     * @return $this
     */
    public function setMeetrequestLocationID($meetrequestLocationID)
    {
        $this->meetrequestLocationID = $meetrequestLocationID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $meetrequestDate
     * @return $this
     */
    public function setMeetrequestDate($meetrequestDate)
    {
        $this->meetrequestDate = $meetrequestDate;

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
        if ($this->meetrequestAnimalID !== null) $parameterArray['meetrequestAnimalID'] = $this->meetrequestAnimalID;
        if ($this->meetrequestContactID !== null) $parameterArray['meetrequestContactID'] = $this->meetrequestContactID;
        if ($this->meetrequestEventID !== null) $parameterArray['meetrequestEventID'] = $this->meetrequestEventID;
        if ($this->meetrequestLocationID !== null) $parameterArray['meetrequestLocationID'] = $this->meetrequestLocationID;
        if ($this->meetrequestDate !== null) $parameterArray['meetrequestDate'] = $this->meetrequestDate;

    }
}