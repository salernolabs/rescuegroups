<?php
/**
 * SubmittedForm Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class SubmittedForm
{
    /**
     * ID
     * @var integer
     */
    public $submittedformID;

    /**
     * Animal
     * @var integer
     */
    public $submittedformAnimalID;

    /**
     * Status
     * @var integer
     */
    public $submittedformStatusID;



    /**
     * SubmittedForms Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->submittedformID)) $this->submittedformID = $inputData->submittedformID;
        if (!empty($inputData->submittedformAnimalID)) $this->submittedformAnimalID = $inputData->submittedformAnimalID;
        if (!empty($inputData->submittedformStatusID)) $this->submittedformStatusID = $inputData->submittedformStatusID;

    }
}