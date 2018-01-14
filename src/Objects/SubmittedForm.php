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
     * ID
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
    public $submittedformStatusID = null;


    /**
     * SubmittedForm Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->submittedformID)) $this->submittedformID = $inputData->submittedformID;
        if (!empty($inputData->submittedformAnimalID)) $this->submittedformAnimalID = $inputData->submittedformAnimalID;
        if (!empty($inputData->submittedformStatusID)) $this->submittedformStatusID = $inputData->submittedformStatusID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->submittedformID !== null) $output['submittedformID'] = $this->submittedformID;
        if ($this->submittedformAnimalID !== null) $output['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->submittedformStatusID !== null) $output['submittedformStatusID'] = $this->submittedformStatusID;

        return $output;
    }
}