<?php
/**
 * AnimalsMeetRequests Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsMeetRequests;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Meet Request ID
     * @var integer
     */
    private $meetrequestID = null;

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
        return 'edit';
    }

    /**
     * Set Meet Request ID
     *
     * @param integer $meetrequestID
     * @return $this
     */
    public function setMeetrequestID($meetrequestID)
    {
        $this->meetrequestID = $meetrequestID;

        return $this;
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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->meetrequestID !== null) $parameterArray['meetrequestID'] = $this->meetrequestID;
        if ($this->meetrequestAnimalID !== null) $parameterArray['meetrequestAnimalID'] = $this->meetrequestAnimalID;
        if ($this->meetrequestContactID !== null) $parameterArray['meetrequestContactID'] = $this->meetrequestContactID;
        if ($this->meetrequestEventID !== null) $parameterArray['meetrequestEventID'] = $this->meetrequestEventID;
        if ($this->meetrequestLocationID !== null) $parameterArray['meetrequestLocationID'] = $this->meetrequestLocationID;
        if ($this->meetrequestDate !== null) $parameterArray['meetrequestDate'] = $this->meetrequestDate;

    }
}