<?php
/**
 * AnimalsReasonsTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsReasonsTransfer
{
    /**
     * Reason
     * @var string
     */
    public $reasonName;



    /**
     * AnimalsReasonsTransfer Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;

    }
}