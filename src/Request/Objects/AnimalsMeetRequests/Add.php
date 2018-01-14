<?php
/**
 * AnimalsMeetRequests Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsMeetRequests;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal ID
     *
     * @var integer
     */
    private $meetrequestAnimalID = null;

    /**
     * Contact ID
     *
     * @var integer
     */
    private $meetrequestContactID = null;

    /**
     * Event ID
     *
     * @var integer
     */
    private $meetrequestEventID = null;

    /**
     * Location ID
     *
     * @var integer
     */
    private $meetrequestLocationID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $meetrequestDate = null;


    /**
     * Set Animal ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMeetrequestAnimalID($value)
    {
        $this->meetrequestAnimalID = $value;

        return $this;
    }

    /**
     * Set Contact ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMeetrequestContactID($value)
    {
        $this->meetrequestContactID = $value;

        return $this;
    }

    /**
     * Set Event ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMeetrequestEventID($value)
    {
        $this->meetrequestEventID = $value;

        return $this;
    }

    /**
     * Set Location ID
     *
     * @param integer $value
     * @return $this
     */
    public function setMeetrequestLocationID($value)
    {
        $this->meetrequestLocationID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setMeetrequestDate($value)
    {
        $this->meetrequestDate = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->meetrequestAnimalID !== null) $parameterArray['values'][] = ["meetrequestAnimalID"=>$this->meetrequestAnimalID];
        if ($this->meetrequestContactID !== null) $parameterArray['values'][] = ["meetrequestContactID"=>$this->meetrequestContactID];
        if ($this->meetrequestEventID !== null) $parameterArray['values'][] = ["meetrequestEventID"=>$this->meetrequestEventID];
        if ($this->meetrequestLocationID !== null) $parameterArray['values'][] = ["meetrequestLocationID"=>$this->meetrequestLocationID];
        if ($this->meetrequestDate !== null) $parameterArray['values'][] = ["meetrequestDate"=>$this->meetrequestDate];
    }
}