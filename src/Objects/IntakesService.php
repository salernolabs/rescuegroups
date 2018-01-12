<?php
/**
 * IntakesService Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesService
{
    /**
     * Service
     *
     * @var integer
     */
    public $intakesServiceID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesServiceAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesServiceAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesServiceDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesServiceNotes = null;

    /**
     * Owner
     *
     * @var integer
     */
    public $intakesServiceOwnerID = null;

    /**
     * Service
     *
     * @var integer
     */
    public $intakesServiceServicetypeID = null;


    /**
     * IntakesService Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesServiceID)) $this->intakesServiceID = $inputData->intakesServiceID;
        if (!empty($inputData->intakesServiceAnimalID)) $this->intakesServiceAnimalID = $inputData->intakesServiceAnimalID;
        if (!empty($inputData->intakesServiceAnimalConditionID)) $this->intakesServiceAnimalConditionID = $inputData->intakesServiceAnimalConditionID;
        if (!empty($inputData->intakesServiceDate)) $this->intakesServiceDate = $inputData->intakesServiceDate;
        if (!empty($inputData->intakesServiceNotes)) $this->intakesServiceNotes = $inputData->intakesServiceNotes;
        if (!empty($inputData->intakesServiceOwnerID)) $this->intakesServiceOwnerID = $inputData->intakesServiceOwnerID;
        if (!empty($inputData->intakesServiceServicetypeID)) $this->intakesServiceServicetypeID = $inputData->intakesServiceServicetypeID;
    }
}