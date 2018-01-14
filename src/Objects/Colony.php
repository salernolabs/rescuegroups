<?php
/**
 * Colony Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Colony implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->colonyID)) $this->colonyID = $inputData->colonyID;
        if (!empty($inputData->colonyName)) $this->colonyName = $inputData->colonyName;
        if (!empty($inputData->colonyLocationID)) $this->colonyLocationID = $inputData->colonyLocationID;
        if (!empty($inputData->colonyTotalAnimals)) $this->colonyTotalAnimals = $inputData->colonyTotalAnimals;
        if (!empty($inputData->colonyRegisteredDate)) $this->colonyRegisteredDate = $inputData->colonyRegisteredDate;
        if (!empty($inputData->colonySpecificLocation)) $this->colonySpecificLocation = $inputData->colonySpecificLocation;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->colonyID !== null) $output['colonyID'] = $this->colonyID;
        if ($this->colonyName !== null) $output['colonyName'] = $this->colonyName;
        if ($this->colonyLocationID !== null) $output['colonyLocationID'] = $this->colonyLocationID;
        if ($this->colonyTotalAnimals !== null) $output['colonyTotalAnimals'] = $this->colonyTotalAnimals;
        if ($this->colonyRegisteredDate !== null) $output['colonyRegisteredDate'] = $this->colonyRegisteredDate;
        if ($this->colonySpecificLocation !== null) $output['colonySpecificLocation'] = $this->colonySpecificLocation;

        return $output;
    }
}