<?php
/**
 * AnimalsMeetRequest Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsMeetRequest implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Meet Request ID, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->meetrequestID)) $this->meetrequestID = $inputData->meetrequestID;
        if (!empty($inputData->meetrequestAnimalID)) $this->meetrequestAnimalID = $inputData->meetrequestAnimalID;
        if (!empty($inputData->meetrequestContactID)) $this->meetrequestContactID = $inputData->meetrequestContactID;
        if (!empty($inputData->meetrequestEventID)) $this->meetrequestEventID = $inputData->meetrequestEventID;
        if (!empty($inputData->meetrequestLocationID)) $this->meetrequestLocationID = $inputData->meetrequestLocationID;
        if (!empty($inputData->meetrequestDate)) $this->meetrequestDate = $inputData->meetrequestDate;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->meetrequestID !== null) $output['meetrequestID'] = $this->meetrequestID;
        if ($this->meetrequestAnimalID !== null) $output['meetrequestAnimalID'] = $this->meetrequestAnimalID;
        if ($this->meetrequestContactID !== null) $output['meetrequestContactID'] = $this->meetrequestContactID;
        if ($this->meetrequestEventID !== null) $output['meetrequestEventID'] = $this->meetrequestEventID;
        if ($this->meetrequestLocationID !== null) $output['meetrequestLocationID'] = $this->meetrequestLocationID;
        if ($this->meetrequestDate !== null) $output['meetrequestDate'] = $this->meetrequestDate;

        return $output;
    }
}