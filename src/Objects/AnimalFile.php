<?php
/**
 * AnimalFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalFile
{
    /**
     * File ID
     *
     * @var integer
     */
    public $animalfileID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalfileAnimalID = null;

    /**
     * Description
     *
     * @var string
     */
    public $animalfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    public $animalfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    public $animalfileDisplayInline = null;

    /**
     * Public
     *
     * @var string
     */
    public $animalfilePublic = null;


    /**
     * AnimalFile Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->animalfileID)) $this->animalfileID = $inputData->animalfileID;
        if (!empty($inputData->animalfileAnimalID)) $this->animalfileAnimalID = $inputData->animalfileAnimalID;
        if (!empty($inputData->animalfileDescription)) $this->animalfileDescription = $inputData->animalfileDescription;
        if (!empty($inputData->animalfileStatus)) $this->animalfileStatus = $inputData->animalfileStatus;
        if (!empty($inputData->animalfileDisplayInline)) $this->animalfileDisplayInline = $inputData->animalfileDisplayInline;
        if (!empty($inputData->animalfilePublic)) $this->animalfilePublic = $inputData->animalfilePublic;
    }
}