<?php
/**
 * AnimalsReasonsEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsReasonsEuthanasia
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
     * AnimalsReasonsEuthanasia Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->reasonID)) $this->reasonID = $inputData->reasonID;
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}