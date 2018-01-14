<?php
/**
 * AnimalsReasonsTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsReasonsTransfer implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Reason ID
     *
     * @var integer
     */
    public $reasonID = null;

    /**
     * Reason
     *
     * @var string
     */
    public $reasonName = null;


    /**
     * AnimalsReasonsTransfer Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->reasonID)) $this->reasonID = $inputData->reasonID;
        if (!empty($inputData->reasonName)) $this->reasonName = $inputData->reasonName;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->reasonID !== null) $output['reasonID'] = $this->reasonID;
        if ($this->reasonName !== null) $output['reasonName'] = $this->reasonName;

        return $output;
    }
}