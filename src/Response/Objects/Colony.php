<?php
/**
 * Colony Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class Colony
{
    /**
     * Name
     * @var string
     */
    public $colonyName;

    /**
     * Location
     * @var integer
     */
    public $colonyLocationID;

    /**
     * Number of animals
     * @var string
     */
    public $colonyTotalAnimals;

    /**
     * Registered
     * @var \DateTime
     */
    public $colonyRegisteredDate;

    /**
     * Specific location
     * @var string
     */
    public $colonySpecificLocation;



    /**
     * Colonies Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->colonyName)) $this->colonyName = $inputData->colonyName;
        if (!empty($inputData->colonyLocationID)) $this->colonyLocationID = $inputData->colonyLocationID;
        if (!empty($inputData->colonyTotalAnimals)) $this->colonyTotalAnimals = $inputData->colonyTotalAnimals;
        if (!empty($inputData->colonyRegisteredDate)) $this->colonyRegisteredDate = $inputData->colonyRegisteredDate;
        if (!empty($inputData->colonySpecificLocation)) $this->colonySpecificLocation = $inputData->colonySpecificLocation;

    }
}