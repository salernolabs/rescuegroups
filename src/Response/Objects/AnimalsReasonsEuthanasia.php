<?php
/**
 * AnimalsReasonsEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\AnimalsReasonsEuthanasia;

class AnimalsReasonsEuthanasia
{
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
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}