<?php
/**
 * SubmittedForm Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class SubmittedForm
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->submittedformID)) $this->submittedformID = $inputData->submittedformID;
        if (!empty($inputData->submittedformAnimalID)) $this->submittedformAnimalID = $inputData->submittedformAnimalID;
        if (!empty($inputData->submittedformStatusID)) $this->submittedformStatusID = $inputData->submittedformStatusID;
    }
}