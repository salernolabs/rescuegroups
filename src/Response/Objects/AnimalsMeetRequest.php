<?php
/**
 * AnimalsMeetRequest Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\AnimalsMeetRequest;

class AnimalsMeetRequest
{
    /**
     * Animal ID
     * @var integer
     */
    public $meetrequestAnimalID;

    /**
     * Contact ID
     * @var integer
     */
    public $meetrequestContactID;

    /**
     * Event ID
     * @var integer
     */
    public $meetrequestEventID;

    /**
     * Location ID
     * @var integer
     */
    public $meetrequestLocationID;

    /**
     * Date
     * @var \DateTime
     */
    public $meetrequestDate;



    /**
     * AnimalsMeetRequests Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->meetrequestAnimalID)) $this->meetrequestAnimalID = $inputData->meetrequestAnimalID;
        if (!empty($inputData->meetrequestContactID)) $this->meetrequestContactID = $inputData->meetrequestContactID;
        if (!empty($inputData->meetrequestEventID)) $this->meetrequestEventID = $inputData->meetrequestEventID;
        if (!empty($inputData->meetrequestLocationID)) $this->meetrequestLocationID = $inputData->meetrequestLocationID;
        if (!empty($inputData->meetrequestDate)) $this->meetrequestDate = $inputData->meetrequestDate;

    }
}