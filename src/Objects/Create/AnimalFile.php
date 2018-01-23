<?php
/**
 * AnimalFile Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class AnimalFile implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Animal, Primary Key
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * File
     *
     * @var string
     */
    public $binary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Inline
     *
     * @var string
     */
    public $displayInline = null;

    /**
     * Public
     *
     * @var string
     */
    public $public = null;


    /**
     * AnimalFile Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->animalfileAnimalID)) $this->animalId = $inputData->animalfileAnimalID;
        if (!empty($inputData->animalfileBinary)) $this->binary = $inputData->animalfileBinary;
        if (!empty($inputData->animalfileOldFileName)) $this->oldFileName = $inputData->animalfileOldFileName;
        if (!empty($inputData->animalfileDescription)) $this->description = $inputData->animalfileDescription;
        if (!empty($inputData->animalfileStatus)) $this->status = $inputData->animalfileStatus;
        if (!empty($inputData->animalfileDisplayInline)) $this->displayInline = $inputData->animalfileDisplayInline;
        if (!empty($inputData->animalfilePublic)) $this->public = $inputData->animalfilePublic;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->animalId !== null) $output['animalfileAnimalID'] = $this->animalId;
        if ($this->binary !== null) $output['animalfileBinary'] = $this->binary;
        if ($this->oldFileName !== null) $output['animalfileOldFileName'] = $this->oldFileName;
        if ($this->description !== null) $output['animalfileDescription'] = $this->description;
        if ($this->status !== null) $output['animalfileStatus'] = $this->status;
        if ($this->displayInline !== null) $output['animalfileDisplayInline'] = $this->displayInline;
        if ($this->public !== null) $output['animalfilePublic'] = $this->public;

        return $output;
    }
}