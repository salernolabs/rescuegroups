<?php
/**
 * AnimalFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\AnimalFile;

class AnimalFile
{
    /**
     * Animal
     * @var integer
     */
    public $animalfileAnimalID;

    /**
     * File
     * @var string
     */
    public $animalfileBinary;

    /**
     * Old file name
     * @var string
     */
    public $animalfileOldFileName;

    /**
     * Description
     * @var string
     */
    public $animalfileDescription;

    /**
     * Status
     * @var string
     */
    public $animalfileStatus;

    /**
     * Inline
     * @var string
     */
    public $animalfileDisplayInline;

    /**
     * Public
     * @var string
     */
    public $animalfilePublic;



    /**
     * AnimalFiles Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->animalfileAnimalID)) $this->animalfileAnimalID = $inputData->animalfileAnimalID;
        if (!empty($inputData->animalfileBinary)) $this->animalfileBinary = $inputData->animalfileBinary;
        if (!empty($inputData->animalfileOldFileName)) $this->animalfileOldFileName = $inputData->animalfileOldFileName;
        if (!empty($inputData->animalfileDescription)) $this->animalfileDescription = $inputData->animalfileDescription;
        if (!empty($inputData->animalfileStatus)) $this->animalfileStatus = $inputData->animalfileStatus;
        if (!empty($inputData->animalfileDisplayInline)) $this->animalfileDisplayInline = $inputData->animalfileDisplayInline;
        if (!empty($inputData->animalfilePublic)) $this->animalfilePublic = $inputData->animalfilePublic;

    }
}