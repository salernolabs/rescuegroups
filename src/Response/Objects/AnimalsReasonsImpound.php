<?php
/**
 * AnimalsReasonsImpound Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsReasonsImpound
{
    /**
     * Reason
     * @var string
     */
    public $reasonName;



    /**
     * AnimalsReasonsImpound Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}