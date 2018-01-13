<?php
/**
 * Colony Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Colony
{
    /**
     * ID
     *
     * @var integer
     */
    public $colonyID = null;

    /**
     * Name
     *
     * @var string
     */
    public $colonyName = null;

    /**
     * Location
     *
     * @var integer
     */
    public $colonyLocationID = null;

    /**
     * Number of animals
     *
     * @var string
     */
    public $colonyTotalAnimals = null;

    /**
     * Registered
     *
     * @var \DateTime
     */
    public $colonyRegisteredDate = null;

    /**
     * Specific location
     *
     * @var string
     */
    public $colonySpecificLocation = null;


    /**
     * Colony Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->colonyID)) $this->colonyID = $inputData->colonyID;
        if (!empty($inputData->colonyName)) $this->colonyName = $inputData->colonyName;
        if (!empty($inputData->colonyLocationID)) $this->colonyLocationID = $inputData->colonyLocationID;
        if (!empty($inputData->colonyTotalAnimals)) $this->colonyTotalAnimals = $inputData->colonyTotalAnimals;
        if (!empty($inputData->colonyRegisteredDate)) $this->colonyRegisteredDate = $inputData->colonyRegisteredDate;
        if (!empty($inputData->colonySpecificLocation)) $this->colonySpecificLocation = $inputData->colonySpecificLocation;
    }
}