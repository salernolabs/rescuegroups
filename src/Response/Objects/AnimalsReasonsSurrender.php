<?php
/**
 * AnimalsReasonsSurrender Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\AnimalsReasonsSurrender;

class AnimalsReasonsSurrender
{
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
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}