<?php
/**
 * AnimalsMeetRequest Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsMeetRequest
{
    /**
     * Meet Request ID
     *
     * @var integer
     */
    public $meetrequestID = null;

    /**
     * Animal ID
     *
     * @var integer
     */
    public $meetrequestAnimalID = null;

    /**
     * Contact ID
     *
     * @var integer
     */
    public $meetrequestContactID = null;

    /**
     * Event ID
     *
     * @var integer
     */
    public $meetrequestEventID = null;

    /**
     * Location ID
     *
     * @var integer
     */
    public $meetrequestLocationID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $meetrequestDate = null;


    /**
     * AnimalsMeetRequest Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->meetrequestID)) $this->meetrequestID = $inputData->meetrequestID;
        if (!empty($inputData->meetrequestAnimalID)) $this->meetrequestAnimalID = $inputData->meetrequestAnimalID;
        if (!empty($inputData->meetrequestContactID)) $this->meetrequestContactID = $inputData->meetrequestContactID;
        if (!empty($inputData->meetrequestEventID)) $this->meetrequestEventID = $inputData->meetrequestEventID;
        if (!empty($inputData->meetrequestLocationID)) $this->meetrequestLocationID = $inputData->meetrequestLocationID;
        if (!empty($inputData->meetrequestDate)) $this->meetrequestDate = $inputData->meetrequestDate;
    }
}