<?php
/**
 * OutcomesReleas Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesReleas implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $outcomesReleaseID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $outcomesReleaseAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $outcomesReleaseDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $outcomesReleaseNotes = null;

    /**
     * Location
     *
     * @var string
     */
    public $outcomesReleaseLocation = null;

    /**
     * Street address
     *
     * @var string
     */
    public $outcomesReleaseAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $outcomesReleaseCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $outcomesReleaseState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $outcomesReleasePostalcode = null;

    /**
     * Released By
     *
     * @var integer
     */
    public $outcomesReleaseByID = null;


    /**
     * OutcomesReleas Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesReleaseID)) $this->outcomesReleaseID = $inputData->outcomesReleaseID;
        if (!empty($inputData->outcomesReleaseAnimalConditionID)) $this->outcomesReleaseAnimalConditionID = $inputData->outcomesReleaseAnimalConditionID;
        if (!empty($inputData->outcomesReleaseDate)) $this->outcomesReleaseDate = $inputData->outcomesReleaseDate;
        if (!empty($inputData->outcomesReleaseNotes)) $this->outcomesReleaseNotes = $inputData->outcomesReleaseNotes;
        if (!empty($inputData->outcomesReleaseLocation)) $this->outcomesReleaseLocation = $inputData->outcomesReleaseLocation;
        if (!empty($inputData->outcomesReleaseAddress)) $this->outcomesReleaseAddress = $inputData->outcomesReleaseAddress;
        if (!empty($inputData->outcomesReleaseCity)) $this->outcomesReleaseCity = $inputData->outcomesReleaseCity;
        if (!empty($inputData->outcomesReleaseState)) $this->outcomesReleaseState = $inputData->outcomesReleaseState;
        if (!empty($inputData->outcomesReleasePostalcode)) $this->outcomesReleasePostalcode = $inputData->outcomesReleasePostalcode;
        if (!empty($inputData->outcomesReleaseByID)) $this->outcomesReleaseByID = $inputData->outcomesReleaseByID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->outcomesReleaseID !== null) $output['outcomesReleaseID'] = $this->outcomesReleaseID;
        if ($this->outcomesReleaseAnimalConditionID !== null) $output['outcomesReleaseAnimalConditionID'] = $this->outcomesReleaseAnimalConditionID;
        if ($this->outcomesReleaseDate !== null) $output['outcomesReleaseDate'] = $this->outcomesReleaseDate;
        if ($this->outcomesReleaseNotes !== null) $output['outcomesReleaseNotes'] = $this->outcomesReleaseNotes;
        if ($this->outcomesReleaseLocation !== null) $output['outcomesReleaseLocation'] = $this->outcomesReleaseLocation;
        if ($this->outcomesReleaseAddress !== null) $output['outcomesReleaseAddress'] = $this->outcomesReleaseAddress;
        if ($this->outcomesReleaseCity !== null) $output['outcomesReleaseCity'] = $this->outcomesReleaseCity;
        if ($this->outcomesReleaseState !== null) $output['outcomesReleaseState'] = $this->outcomesReleaseState;
        if ($this->outcomesReleasePostalcode !== null) $output['outcomesReleasePostalcode'] = $this->outcomesReleasePostalcode;
        if ($this->outcomesReleaseByID !== null) $output['outcomesReleaseByID'] = $this->outcomesReleaseByID;

        return $output;
    }
}