<?php
/**
 * IntakesService Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class IntakesService
{
    /**
     * Animal
     * @var integer
     */
    public $intakesServiceAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesServiceAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesServiceDate;

    /**
     * Notes
     * @var string
     */
    public $intakesServiceNotes;

    /**
     * Owner
     * @var integer
     */
    public $intakesServiceOwnerID;

    /**
     * Service
     * @var integer
     */
    public $intakesServiceServicetypeID;



    /**
     * IntakesServices Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesServiceAnimalID)) $this->intakesServiceAnimalID = $inputData->intakesServiceAnimalID;
        if (!empty($inputData->intakesServiceAnimalConditionID)) $this->intakesServiceAnimalConditionID = $inputData->intakesServiceAnimalConditionID;
        if (!empty($inputData->intakesServiceDate)) $this->intakesServiceDate = $inputData->intakesServiceDate;
        if (!empty($inputData->intakesServiceNotes)) $this->intakesServiceNotes = $inputData->intakesServiceNotes;
        if (!empty($inputData->intakesServiceOwnerID)) $this->intakesServiceOwnerID = $inputData->intakesServiceOwnerID;
        if (!empty($inputData->intakesServiceServicetypeID)) $this->intakesServiceServicetypeID = $inputData->intakesServiceServicetypeID;

    }
}