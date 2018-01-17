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
    public $animalfileAnimalID = null;

    /**
     * File
     *
     * @var string
     */
    public $animalfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    public $animalfileOldFileName = null;

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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->animalfileAnimalID)) $this->animalfileAnimalID = $inputData->animalfileAnimalID;
        if (!empty($inputData->animalfileBinary)) $this->animalfileBinary = $inputData->animalfileBinary;
        if (!empty($inputData->animalfileOldFileName)) $this->animalfileOldFileName = $inputData->animalfileOldFileName;
        if (!empty($inputData->animalfileDescription)) $this->animalfileDescription = $inputData->animalfileDescription;
        if (!empty($inputData->animalfileStatus)) $this->animalfileStatus = $inputData->animalfileStatus;
        if (!empty($inputData->animalfileDisplayInline)) $this->animalfileDisplayInline = $inputData->animalfileDisplayInline;
        if (!empty($inputData->animalfilePublic)) $this->animalfilePublic = $inputData->animalfilePublic;
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
        if ($includeId && $this->animalfileAnimalID !== null) $output['animalfileAnimalID'] = $this->animalfileAnimalID;
        if ($this->animalfileBinary !== null) $output['animalfileBinary'] = $this->animalfileBinary;
        if ($this->animalfileOldFileName !== null) $output['animalfileOldFileName'] = $this->animalfileOldFileName;
        if ($this->animalfileDescription !== null) $output['animalfileDescription'] = $this->animalfileDescription;
        if ($this->animalfileStatus !== null) $output['animalfileStatus'] = $this->animalfileStatus;
        if ($this->animalfileDisplayInline !== null) $output['animalfileDisplayInline'] = $this->animalfileDisplayInline;
        if ($this->animalfilePublic !== null) $output['animalfilePublic'] = $this->animalfilePublic;

        return $output;
    }
}