<?php
/**
 * AnimalsReasonsSurrender Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsReasonsSurrender
{
    /**
     * Reason ID
     * @var integer
     */
    public $reasonID;

    /**
     * Reason
     * @var string
     */
    public $reasonName;



    /**
     * AnimalsReasonsSurrender Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->reasonID)) $this->reasonID = $inputData->reasonID;
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}