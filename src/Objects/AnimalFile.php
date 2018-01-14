<?php
/**
 * AnimalFile Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalFile implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->animalfileID)) $this->animalfileID = $inputData->animalfileID;
        if (!empty($inputData->animalfileAnimalID)) $this->animalfileAnimalID = $inputData->animalfileAnimalID;
        if (!empty($inputData->animalfileDescription)) $this->animalfileDescription = $inputData->animalfileDescription;
        if (!empty($inputData->animalfileStatus)) $this->animalfileStatus = $inputData->animalfileStatus;
        if (!empty($inputData->animalfileDisplayInline)) $this->animalfileDisplayInline = $inputData->animalfileDisplayInline;
        if (!empty($inputData->animalfilePublic)) $this->animalfilePublic = $inputData->animalfilePublic;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->animalfileID !== null) $output['animalfileID'] = $this->animalfileID;
        if ($this->animalfileAnimalID !== null) $output['animalfileAnimalID'] = $this->animalfileAnimalID;
        if ($this->animalfileDescription !== null) $output['animalfileDescription'] = $this->animalfileDescription;
        if ($this->animalfileStatus !== null) $output['animalfileStatus'] = $this->animalfileStatus;
        if ($this->animalfileDisplayInline !== null) $output['animalfileDisplayInline'] = $this->animalfileDisplayInline;
        if ($this->animalfilePublic !== null) $output['animalfilePublic'] = $this->animalfilePublic;

        return $output;
    }
}