<?php
/**
 * SubmittedForm Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class SubmittedForm implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $submittedformID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $submittedformAnimalID = null;

    /**
     * Status
     *
     * @var integer
     */
    public $tatusID = null;


    /**
     * SubmittedForm Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->submittedformID)) $this->submittedformID = $inputData->submittedformID;
        if (!empty($inputData->submittedformAnimalID)) $this->submittedformAnimalID = $inputData->submittedformAnimalID;
        if (!empty($inputData->submittedformStatusID)) $this->tatusID = $inputData->submittedformStatusID;
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
        if ($includeId && $this->submittedformID !== null) $output['submittedformID'] = $this->submittedformID;
        if ($this->submittedformAnimalID !== null) $output['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->tatusID !== null) $output['submittedformStatusID'] = $this->tatusID;

        return $output;
    }
}